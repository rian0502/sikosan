<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoKosanModel extends Model
{
    protected $table            = 'foto_kosan';
    protected $primaryKey       = 'id_foto';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kosan','id_foto' ,'nama_foto'
    ];
}
