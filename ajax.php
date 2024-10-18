<?php 

require 'vendor/autoload.php';

use Bramus\Router\Router;
use Controllers\MainController;
use Database\Database;

$action = $_POST['action'] ?? '';

if (strlen($action) == 0) {
   /// 404 sayfası
        $router = new Router();
        $router->set404(function() {
            http_response_code(404);
            $controller = new MainController();
            $controller->error404();

        });

        $router->run();

} elseif ($action == "addToCart"){
    //echo "Sepete ekleme işlemi yapılacak";

    $controller = new MainController();
    $db = Database::getInstance()->getConnection();

    $product_id = $_POST['productId'] ?? 0;
    $session_id = $_POST['session_id'] ?? 0;

    $uri = $_SERVER['REQUEST_URI'] ?? "";

    //ürün_id zaten ekli ise hata ver
   
    $query = $db->prepare('SELECT * FROM sepet WHERE session_id = :session_id AND urun_id = :product_id');
    $query->execute([
        'session_id' => $session_id,
        'product_id' => $product_id
    ]);

    $cart = $query->fetch();

    if ($cart) {
        //$controller->ajaxResponse(false, "Ürün zaten sepetinizde", []);
        $controller->deleteItem($session_id, $product_id);
    } else {

           
            // db kayıt
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare('INSERT INTO sepet (session_id, urun_id, date, uri) VALUES (:session_id, :product_id, :created_at, :uri)');

            $query->execute([
                'session_id' => $session_id,
                'product_id' => $product_id,
                'created_at' => date('Y-m-d H:i:s'),
                'uri' => $uri
            ]);

 
            //sepetteki urunleri getir
            $sepet_data = [];
            $sepet_data = $controller->urun_getir($session_id);

            $controller->ajaxResponse(true, "Ürün sepete eklendi", [
                'cart_items' => $sepet_data,
                'cart_count' => $controller->productCount($session_id)
            ]);

    }

} elseif ($action == "getCart"){
    $controller = new MainController();
    $cart = $controller->getCart();

    $controller->ajaxResponse(true, "Sepet bilgisi getirildi", $cart);

} elseif ($action == "sepetControl"){

    $controller = new MainController();
    $session_id = $_POST['session_id'] ?? 0;

    $db = Database::getInstance()->getConnection();

    $sepet_data = [];
    $sepet_data = $controller->urun_getir($session_id);

    $controller->ajaxResponse(true, "Sepet bilgisi getirildi", [
        'cart_items' => $sepet_data,
        'cart_count' => $controller->productCount($session_id)
    ]);

} elseif ($action == "deleteFromCart"){

    $controller = new MainController();
    $session_id = $_POST['session_id'] ?? 0;
    $product_id = $_POST['product_id'] ?? 0;

    $controller->deleteItem($session_id, $product_id);



} elseif ($action == "deleteFromSepet"){

    $controller = new MainController();
    $session_id = $_POST['session_id'] ?? 0;
    $product_id = $_POST['product_id'] ?? 0;

    $controller->deleteItem($session_id, $product_id);

    

} else {
    $controller = new MainController();
    $controller->ajaxResponse(false, "Geçersiz işlem", []);


}