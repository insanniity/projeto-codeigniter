<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Product',
        ];


        return view('painel/products/list', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Product',
        ];

        return view('painel/products/create', $data);
    }

    

}
