<?php

namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
    protected $table            = 'wishlist';
    protected $primaryKey       = 'id_wishlist';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['id_wishlist','id_kosan', 'id_user'];

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

    public function getWishlist()
    {
        $query = $this->db->table('wishlist')
            ->where('id_user', user_id())
            ->join('kosan', 'wishlist.id_kosan=kosan.id_kosan')
            ->join('foto_kosan', 'kosan.id_kosan=foto_kosan.id_kosan')
            ->groupBy('kosan.id_kosan')
            ->get()
            ->getResultArray();
        return $query;
    }
}
