<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [
        // 'user_id' => 'id',
        // 'restaurant_id' => 'restaurantId',
        // 'username' => 'username',
        // 'password' => 'password',
        // 'name' => 'name',
        // 'email' => 'email',
        // 'roles' => 'roles',
        // 'blocked_until' => 'blockedUntil',
        // 'phone' => 'phone',
        // 'active' => 'active',
        // 'code' => 'code',
        // 'last_login' => 'lastLogin',
        // 'created_at' => 'createdAt',
        // 'updated_at' => 'updatedAt',
        // 'deleted_at' => 'deletedAt',
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [
        // 'user_id' => 'integer',
        // 'restaurant_id' => 'integer',
        // 'username' => 'string',
        // 'password' => 'string',
        // 'name' => 'string',
        // 'email' => 'string',
        // 'roles' => 'string',
        // 'blocked_until' => 'datetime',
        // 'phone' => 'string',
        // 'active' => 'boolean',
        // 'code' => 'string',
        // 'last_login' => 'datetime',
        // 'created_at' => 'datetime',
        // 'updated_at' => 'datetime',
        // 'deleted_at' => 'datetime',
    ];
}
