<?php

namespace Controllers;

use eftec\bladeone\BladeOne;
use Database\Database;

define('BASE_URL', '/demo/');
define('SHIPING_COST', 50);

class MainController {
    protected $blade;

    public function __construct() {
        $views = __DIR__ . '/../views';
        $cache = __DIR__ . '/../cache';
        $this->blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); 
    }
    

    public function render($view, $data = []) {
        $data['categories'] = $this->getCategories();       
        $data['cart'] = $this->getCart();
        echo $this->blade->run($view, $data);
    }
    

    public function getCategories() {
        $db = Database::getInstance()->getConnection();
    
        $categories = [];
        
        $query = $db->prepare('SELECT baslik,seflink,anahtar FROM kategoriler WHERE tablo = ? AND durum = ?');
        $query->execute(['ana-cat', 1]);
    
        $categories = $query->fetchAll(); 
    
        foreach ($categories as $key => $category) {
            
            $query = $db->prepare('SELECT * FROM kategoriler WHERE tablo = ? AND durum = ?');
            $query->execute([$category['anahtar'], 1]);
            $categories[$key]['subcategories'] = $query->fetchAll(); 
        }
        //var_dump($categories);
        return $categories; 
    }
    public function error404() {
        http_response_code(404);
        $this->render('404');
    }

    //ajax request response 
    public function ajaxResponse ($status = true , $message = "", $data = []) {
        $response = [
            'status' => ($status ? 'success' : 'error'),
            'message' => $message,
            'data' => $data
        ];
        //json response
        header('Content-Type: application/json');
        echo json_encode($response);

        exit;
    }

    //create session
    public function createSession() {

        if (!isset($_SESSION['session_id'])) {
            $_SESSION['session_id'] = md5(uniqid());

            $request_uri = $_SERVER['REQUEST_URI'] ?? "";

            //save db
            $db = Database::getInstance()->getConnection();

            $query = $db->prepare('INSERT INTO sepet (session_id, date, uri) VALUES (:session_id, :created_at, :uri)');

            $query->execute([
                'session_id' => $_SESSION['session_id'],
                'created_at' => date('Y-m-d H:i:s'),
                'uri' => $request_uri
            ]);


        }

    
    }

    public function getCart() {
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare('SELECT * FROM sepet WHERE session_id = :session_id AND urun_id > 0');
        $query->execute(['session_id' => $_SESSION['session_id']]);
        $cart = $query->fetch();

        $count = 0;

       //cart row count
       $count = $query->rowCount();

       return [
           'cart_count' => $count,
           'cart' => $cart
       ];

    }

    public function urun_getir($session_id){

        $db = Database::getInstance()->getConnection();

        $query = $db->prepare('SELECT urun.id, urun.urun_adi, urun.tutar, urun.indirim, urun.seflink FROM sepet INNER JOIN urun ON sepet.urun_id = urun.id WHERE session_id = :session_id');
        $query->execute(['session_id' => $session_id]);
        $sepet = $query->fetchAll();
       
        $sepet_data = [];
       
            foreach ($sepet as $item ) {

                $real_price = 0;

                if ($item['indirim'] > 0) {
                    $price = $item['tutar'] - ($item['tutar'] * $item['indirim']) / 100;
                    $real_price = $item['tutar'];
                } else {
                    $price = $item['tutar'];
                }

                $sepet_data[] = [
                            'id'  => $item['id'],
                            'product_name' => $item['urun_adi'],
                            'price' => intval($price),
                            'item_image' => "",
                            'seflink' => $item['seflink'] . "-" . (100000 + $item['id']),
                            'indirim' => $item['indirim'],
                            'real_price' => $real_price
       
                ];        
                   }

        return $sepet_data;
    }

    public function deleteItem ($session_id, $product_id) {
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare('DELETE FROM sepet WHERE session_id = :session_id AND urun_id = :product_id');
        $query->execute([
            'session_id' => $session_id,
            'product_id' => $product_id
        ]);

        $sepet_data = $this->urun_getir($session_id);

       try {
           $this->ajaxResponse(true, "Ürün sepetten silindi", [
               'cart_items' => $sepet_data,
               'cart_count' => $this->productCount($session_id),
               'action' => 'delete'
           ]);
       } catch (\Exception $e) {
           $this->ajaxResponse(false, $e->getMessage(), []);
       }
    }

    public function productCount ($session_id) {
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare('SELECT COUNT(*) as count FROM sepet WHERE session_id = :session_id AND urun_id > 0');
        $query->execute(['session_id' => $session_id]);
        $cart = $query->fetch();

        return $cart['count'];

    }



}