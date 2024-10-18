<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

require 'vendor/autoload.php';

use Bramus\Router\Router;
use Controllers\MainController;
use Controllers\IndexController;
use Controllers\AboutController;
use Controllers\ProductController;
use Controllers\CategoryController;
use Controllers\CartController;

$router = new Router();


if (!isset($_SESSION['session_id'])) {
    $controller = new MainController();
    $controller->createSession();
}


// Ana sayfa
$router->get('/', function() {
    $controller = new IndexController();
    $controller->index();

});

// Hakkımızda sayfası
$router->get('/about', function() {
    $controller = new AboutController();
    $controller->show();
});

// Ürün sayfası (dinamik id parametresi alır)
$router->get('/urun/{slug}', function($id) {
    $controller = new ProductController();
    $controller->show($id); // Dinamik id değerini gönderiyoruz
});

///kategori/[erkek-ayakkabı]
$router->get('/kategori/{slug}', function($seflink) {
    $controller = new CategoryController();
    $controller->show($seflink);  // Dinamik id değerini gönderiyoruz
});

//sepet 
$router->get('/sepet', function() {
    $controller = new CartController();
    $controller->show();
});

// 404 sayfası
$router->set404(function() {
    http_response_code(404);
    $controller = new MainController();
    $controller->error404();
});




$router->run();
