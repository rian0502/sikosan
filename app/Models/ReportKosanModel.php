<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportKosanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'report_kosan';
    protected $primaryKey       = 'id_report';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_report','id_kosan', 'id_user', 'report', 'created_at', 'updated_at'];

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
            ->join('kosan', 'kosan.id_kosan = report_kosan.id_kosan')
            ->join('users', 'users.id = report_kosan.id_user')
            ->get()
            ->getResultArray();

        // dd($data);

        return $data;
    }

    public function getReportByIDKosan($id)
    {
        $data = $this->db->table($this->table)
            ->where('id_kosan', $id)
            ->get()
            ->getResultArray();

        return $data;
    }
}
