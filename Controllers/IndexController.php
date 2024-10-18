<?php

namespace Controllers;
class IndexController extends MainController {
    public function index() {
        $data = [
            'title' => 'Ana Sayfa' ,
            'welcomeMessage' => 'Hoşgeldiniz!',
            'data' => ['Öğe 1', 'Öğe 2', 'Öğe 3'],
        ];

        $this->render('index', $data);
    }
}

