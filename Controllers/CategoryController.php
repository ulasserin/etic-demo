<?php 

    namespace Controllers;
    use Database\Database;

    class CategoryController extends MainController {

        public function show($id) {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare('SELECT * FROM kategoriler WHERE seflink = :id');
            $query->execute(['id' => $id]);
            $category = $query->fetch();

            $category_name = $category['baslik'] ?? "";
            $cat = $category['seflink'] ?? "";

            if ($category) {

                // urun bilgilerini getir
                $query = $db->prepare('SELECT * FROM urun WHERE kategori = ? LIMIT 8');
                $query->execute([$cat]);

                $products = $query->fetchAll();

                //products dizisindeki indirim bilgisini al
                foreach ($products as $key => $product) {
                    $products[$key]['indirimli_fiyat'] = $product['tutar'] - ($product['tutar'] * $product['indirim']) / 100;
                    $products[$key]['seflink'] = $product['seflink'] . "-" . (100000 + $product['id']);
                    
                }

                $data = [
                    'title' => 'Kategori - ' . $category_name,
                    'description' => 'Bu kategori hakkında bilgi verir.',
                    'category' => $category, // Tüm kategori bilgisi
                    'products' => $products, // Ürünler
                ];

                $this->render('category', $data);  
            } else {
                $this->error404();
            }

        }
    }