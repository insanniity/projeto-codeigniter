<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\User::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'password', 'name','email', 'phone', 'active', 'created_at', 'updated_at', 'deleted_at', 'user_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function check_for_login($username, $password) : bool|User
    {
        // where clauses
        $where = [
            'username' => $username,
            'password' => $password,
            'active' => 1,
            'deleted_at' => null
        ];

        $user = $this->where($where)->first();

        if(!empty($user)){
            if(password_verify($password, $user->passwrd)){
                return $user;
            }
        }


        // // update last login
        // $this->update($user->id, ['last_login' => date('Y-m-d H:i:s')]);

        return false;
    }




}
