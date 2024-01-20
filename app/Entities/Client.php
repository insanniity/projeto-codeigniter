<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Client extends Entity
{
    protected $datamap = [
        // 'client_id' => 'id',
        // 'restaurant_id' => 'restaurantId',
        // 'name' => 'name',
        // 'email' => 'email',
        // 'phone' => 'phone',
        // 'active' => 'active',
        // 'created_at' => 'createdAt',
        // 'updated_at' => 'updatedAt',
        // 'deleted_at' => 'deletedAt',
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [
        // 'client_id' => 'integer',
        // 'restaurant_id' => 'integer',
        // 'name' => 'string',
        // 'email' => 'string',
        // 'phone' => 'string',
        // 'active' => 'boolean',
        // 'created_at' => 'datetime',
        // 'updated_at' => 'datetime',
        // 'deleted_at' => 'datetime',
    ];
}
