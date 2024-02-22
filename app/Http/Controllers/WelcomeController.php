<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {
    public function hello() {
        return 'Hello Wolrd';
    }

    public function greeting() {
        return view('blog.hello')
        ->with('name','Faradilla')
        ->with('occupation','Astronaut');
    }
}
