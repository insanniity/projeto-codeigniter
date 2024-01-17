<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        // home page
        return view('home');
    }

    public function products()
    {
        // products page
        return view('products');
    }

    public function where()
    {
        // where we are page
        return view('where');
    }
}
