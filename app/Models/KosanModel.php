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
        'deleted_at',
        'kota'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Ambil semua data kosan
    public function getAllKosan()
    {
        $queryKosan = $this->db->table('kosan')
            ->join('foto_kosan', 'kosan.id_kosan=foto_kosan.id_kosan')->groupBy('kosan.id_kosan')->orderBy('kosan.id_kosan', 'DESC')
            ->get();
        return $queryKosan;
    }

    // Ambil kosan berdasarkan id user
    public function getKosanByIdUser()
    {
        $query = $this->db->table($this->table)
            ->join('foto_kosan', 'kosan.id_kosan=foto_kosan.id_kosan')->groupBy('kosan.id_kosan')->orderBy('kosan.id_kosan', 'DESC')
            ->getWhere(['kosan.idPemilik' => user_id()])->getResult();
        return $query;
    }

    // Ambil data kosan berdasarkan id kosan
    public function getKosanByIdKosan($id_kosan)
    {
        $queryKosan = $this->db->table('kosan')
            ->join('foto_kosan', 'kosan.id_kosan=foto_kosan.id_kosan')->getWhere(['kosan.id_kosan' => $id_kosan])->getFirstRow();
        return $queryKosan;
    }
}
