<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller {
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2241720205 - Faradilla Roudhotul S';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
