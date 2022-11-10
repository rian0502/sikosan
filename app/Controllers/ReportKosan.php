<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KosanModel;
use App\Models\ReportKosanModel;

class ReportKosan extends BaseController
{
    public function __construct()
    {
        $this->kosanModel = new KosanModel();
        $this->reportKosanModel = new ReportKosanModel();
    }

    public function index()
    {
    }

    public function create($id)
    {
        $data = [
            'title' => 'Laporkan Kosan',
            'kosan' => $this->kosanModel->getKosanForReport($id)
        ];

        return view('report_kosan/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());

        $data = [
            'id_kosan' => $this->request->getVar('id_kosan'),
            'id_user' => $this->request->getVar('id_user'),
            'report' => $this->request->getVar('report'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->reportKosanModel->insert($data);

        session()->setFlashdata('pesan_laporan', 'Laporan berhasil di kirim');

        return redirect()->to('/detail/' . $this->request->getVar('id_kosan') . '/#report');
    }
}
