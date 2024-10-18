<?php

namespace Controllers;

class AboutController extends MainController {
    public function show() {
        $data = [
            'title' => 'Hakkımızda',
            'description' => 'Bu sayfa hakkında bilgi verir.'
        ];

        // MainController'ın render fonksiyonunu kullanıyoruz
        $this->render('about', $data);
    }
}
