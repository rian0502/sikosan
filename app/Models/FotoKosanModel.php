<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoKosanModel extends Model
{
    protected $table            = 'foto_kosan';
    protected $primaryKey       = 'id_photo';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id_kosan'
    ];
}
