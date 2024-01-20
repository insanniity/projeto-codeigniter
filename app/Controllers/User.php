<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $resultados = $userModel->findAll();
        print_r($resultados);
    }
}
