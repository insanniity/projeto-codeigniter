<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Restaurant extends Entity
{
    protected $datamap = [
        // 'restaurant_id' => 'id',
        // 'name' => 'name',
        // 'address' => 'address',
        // 'phone' => 'phone',
        // 'email' => 'email',
        // 'created_at' => 'createdAt',
        // 'updated_at' => 'updatedAt',
        // 'deleted_at' => 'deletedAt',
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [
        // 'restaurant_id' => 'integer',
        // 'name' => 'string',
        // 'address' => 'string',
        // 'phone' => 'string',
        // 'email' => 'string',
        // 'created_at' => 'datetime',
        // 'updated_at' => 'datetime',
        // 'deleted_at' => 'datetime',
    ];
}
