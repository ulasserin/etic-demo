<?php

namespace Controllers;
use Database\Database;

class ProductController extends MainController {
    public function show($id) {
        
        // ID'yi sondan ayırıyoruz
        $lastHyphenPos = strrpos($id, '-');
    
        if ($lastHyphenPos === false) {
            die('Geçersiz ID formatı');
        }

        // Seflink kısmı
        $seflink = substr($id, 0, $lastHyphenPos);

        // ID kısmı (100000 eklenmiş olan ID)
        $id = intval(substr($id, $lastHyphenPos + 1)) - 100000;

        try {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare('SELECT * FROM urun WHERE seflink = ? AND id = ?');
            $query->execute([$seflink, $id]);

            // Veritabanından sonucu çek
            $product = $query->fetch();

            if ($product) {

                // İndirimli fiyatı hesapla
                if ($product['indirim'] > 0) {
                    $product['indirimli_fiyat'] = $product['tutar'] - ($product['tutar'] * $product['indirim']) / 100;
                } else {
                    $product['indirimli_fiyat'] = $product['tutar'];
                }

                $data = [
                    'title' => $product['urun_adi'],
                    'description' => $product['aciklama'],
                    'product' => $product,
                ];

                $this->render('product', $data);
            } else {
                $this->error404();
            }

        } catch (\PDOException $e) {
            die("Veritabanı hatası: " . $e->getMessage());
        }
    }
}
