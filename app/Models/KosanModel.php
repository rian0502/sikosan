<?php

namespace App\Models;

use CodeIgniter\Model;

class KosanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kosan';
    protected $primaryKey       = 'id_kosan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kosan',
        'namaKost',
        'alamat',
        'kecamatan',
        'deskripsi',
        'fasilitas',
        'harga',
        'type',
        'idPemilik',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getKosan()  
    {
        $queryKosan = $this->db->table('kosan')
        ->join('foto_kosan', 'kosan.id_kosan=foto_kosan.id_kosan')
        ->get();
        return $queryKosan;
        
    }

}
