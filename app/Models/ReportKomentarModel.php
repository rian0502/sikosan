<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportKomentarModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'report_komentar';
    protected $primaryKey       = 'id_report_komentar';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
<<<<<<< HEAD
<<<<<<< HEAD
    protected $allowedFields    = ['id_user', 'id_user_komentar', 'laporan_komentar', 'isReply', 'komentar_dilaporkan', 'created_at', 'updated_at'];
=======
    protected $allowedFields    = ['id_user', 'id_komentar', 'id_user_komentar', 'laporan_komentar', 'isReply', 'komentar_dilaporkan', 'created_at', 'updated_at'];
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
    protected $allowedFields    = ['id_user', 'id_komentar', 'id_user_komentar', 'laporan_komentar', 'isReply', 'komentar_dilaporkan', 'created_at', 'updated_at'];
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78

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

    public function getReport()
    {
        $data = $this->db->table($this->table)
            ->join('users', 'users.id = report_komentar.id_user')
            ->orderBy('report_komentar.id_report_komentar', 'DESC')
            ->get()
            ->getResultArray();

        // dd($data);

        return $data;
    }

    public function getUserKomentar()
    {
        $data = $this->db->table('report_komentar')
            ->join('users', 'users.id=report_komentar.id_user_komentar')
            ->orderBy('report_komentar.id_report_komentar', 'DESC')
            ->get()
            ->getResultArray();

        return $data;
    }
}
