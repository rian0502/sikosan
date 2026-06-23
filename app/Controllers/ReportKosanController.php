<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KosanModel;
use App\Models\ReportKosanModel;
use App\Models\FotoKosanModel;

class ReportKosanController extends BaseController
{

    public function __construct()
    {
        $this->reportKosanModel = new ReportKosanModel();
        $this->kosanModel = new KosanModel();
        $this->faker = \Faker\Factory::create('id_ID');
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
            'id_report' => $this->faker->unique()->uuid(),
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
        $kosan = $this->kosanModel->getKosanForReport($id);
        $kosan[0]['gambar'] = (new FotoKosanModel())->where('id_kosan', $id)->get()->getResultArray();
        $pemilik = $this->kosanModel->join('users', 'users.id = kosan.idPemilik')->getWhere(['id_kosan' => $id])->getResultArray()[0];
        // dd($pemilik);


        $data = [
            'title' => 'Review Kosan',
            'kosan' => $kosan,
            'pemilik' => $pemilik,
        ];

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
