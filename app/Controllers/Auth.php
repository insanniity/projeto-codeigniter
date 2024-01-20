<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Entities\User;
use App\Models\UserModel;
use App\Models\RestaurantModel;

class Auth extends BaseController
{   
    private $userModel = null;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    
    public function login()
    {   
        $restaurantModel = new RestaurantModel();

        $restaurants = $restaurantModel->select('restaurant_id, name')->findAll();

        // print_r($restaurants);

        $data = [];
        $data['restaurants'] = $restaurants;

        $errors = session()->getFlashdata('errors');
        if($errors){
            $data['errors'] = $errors;
        }


        return view('auth/login', $data);
    }


    public function login_submit()
    {   
        $validation = $this->validate([
            'username' => [
                'label' => 'Usuário',
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'O campo email é obrigatório.',
                    'min_length' => 'O campo email deve ter no mínimo 3 caracteres.',
                    'max_length' => 'O campo email deve ter no máximo 50 caracteres.'
                ]
            ],
            'password' => [
                'label' => 'Senha',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo senha é obrigatório.'
                ]
            ],
            'select_restaurant' => [
                'label' => 'Restaurante',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo restaurante é obrigatório.'
                ]
            ]
        ]);


        if(!$validation){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $restaurant_id = Decrypt($this->request->getPost('select_restaurant'));
        

        $result = $this->userModel->check_for_login($username, $password, $restaurant_id);

        if(!$result){
            return redirect()->back()->withInput()->with('errors', ['Usuário ou senha inválidos.']);
        }
        $restaurantModel = new RestaurantModel();
        $restaurant = $restaurantModel->find($restaurant_id);

        $dados_sessao = [
            'user' => $result,
            'restaurant' => $restaurant,
            'logged_in' => true
        ];

        session()->set($dados_sessao);

        return redirect()->to('/painel');

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
