<?php

    namespace Controllers;
    use Database\Database;

    class CartController extends MainController {
        public function show() {

            $products = $this->urun_getir($_SESSION['session_id']);

            $data = [
                'title' => 'Sepetim',
                'description' => 'Sepetinizdeki ürünler',
                'products' => $products,
            ];

            $this->render('cart', $data);     
            
        }

    }