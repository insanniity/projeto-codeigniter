<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = User::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
                                    'user_id',
                                    'restaurant_id',
                                    'username',
                                    'password',
                                    'name',
                                    'email',
                                    'roles',
                                    'blocked_until',
                                    'phone',
                                    'active',
                                    'code',
                                    'last_login',
                                    'created_at',
                                    'updated_at',
                                    'deleted_at',
                                ];

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
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['hashPassword'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        if (empty($data['data']['password'])) {
            unset($data['data']['password']);
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

    public function check_for_login($username, $password, $restaurant_id) : bool|User
    {
        // where clauses
        $where = [
            'username' => $username,
            'restaurant_id' => $restaurant_id,
            'blocked_until' => null, // 'blocked_until' => 'null
            'active' => 1,
            'deleted_at' => null
        ];

        // $user = $this->where($where)->first();

        $user = $this->where($where)->first();

        if(empty($user)){
            return false;
        }

        if(!password_verify($password, $user->password)){
            return false;
        }

        $user->lastLogin = date('Y-m-d H:i:s');

        // update last login
        $this->update($user->user_id, ['last_login' => date('Y-m-d H:i:s')]);

        return $user;
    }




}
