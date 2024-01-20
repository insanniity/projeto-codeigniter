<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Restaurant;

class RestaurantModel extends Model
{
    protected $table            = 'restaurants';
    protected $primaryKey       = 'restaurant_id';
    protected $useAutoIncrement = true;
    protected $returnType       = Restaurant::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
                                    'restaurant_id',
                                    'name',
                                    'address',
                                    'phone',
                                    'email',
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
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
