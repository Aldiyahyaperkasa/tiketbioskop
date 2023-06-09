<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{

    protected $table            = 'tb_users';
    protected $primaryKey       = 'username';
    protected $returnType       = 'object';
    protected $useTimestamps = false;
    protected $allowedFields    = ['username', 'password', 'name'];
}
