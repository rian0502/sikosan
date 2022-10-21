<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoKosanModel extends Model
{
    protected $table            = 'foto_kosan';
    protected $primaryKey       = 'id_foto';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kosan', 'nama_foto'
    ];
}
