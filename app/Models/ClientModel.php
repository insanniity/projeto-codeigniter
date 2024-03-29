<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Client;

class ClientModel extends Model
{
    protected $table            = 'clients';
    protected $primaryKey       = 'client_id';
    protected $useAutoIncrement = true;
    protected $returnType       = Client::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
                                    'client_id',
                                    'name',
                                    'email',
                                    'phone',
                                    'birthday',
                                    'address',
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
