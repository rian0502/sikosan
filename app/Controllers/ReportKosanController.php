<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KosanModel;
use App\Models\ReportKosanModel;
use Myth\Auth\Models\UserModel;

class ReportKosanController extends BaseController
{

    public function __construct()
    {
        $this->reportKosanModel = new ReportKosanModel();
        $this->kosanModel = new KosanModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Laporan Kosan',
            'reports' => $this->reportKosanModel->getReport(),
        ];

        return view('auth/admin/data_report_kosan', $data);
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

    public function detail_kosan($id)
    {
        $data = [
            'title' => 'Review Kosan',
            'dataKosan' => $this->kosanModel->getKosanByIdKosan($id),
            'penyewa' => user()->namaLengkap,
        ];

        // dd($data);

        return view('auth/admin/detail_kosan_page', $data);
    }

    public function delete()
    {
        $id_kosan = $this->request->getVar('id_kosan');

        $dataReport = $this->reportKosanModel->getReportByIDKosan($id_kosan);

        foreach ($dataReport as $data) {
            $this->reportKosanModel->delete($data['id_report']);
        }

        $this->kosanModel->delete($id_kosan);

        session()->setFlashdata('pesan', 'Tindakan berhasil dilakukan');

        return redirect()->to('/admin/data_report_kosan');
    }
}
