<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReportKomentarModel;
use App\Models\Users;
use Myth\Auth\Models\UserModel;

class ReportKomentar extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->reportKomentarModel = new ReportKomentarModel();
        $this->userInternal = new Users();
    }

    public function index()
    {

        $pemilik_komentar = $this->reportKomentarModel->getUserKomentar();
        $userBanned = $this->userModel->where(['status'=>'banned'])->findAll();
        $data = [
            'title' => 'Laporan Komentar',
            'reports' => $this->reportKomentarModel->getReport(),
            'pemilik_komentar' => $pemilik_komentar,
        ];
        return view('auth/admin/data_report_komentar', $data);
    }

    public function create($id_kosan, $id_komentar, $id_user_komentar, $komentar)
    {
        $user_komentar = $this->userModel->where('id', $id_user_komentar)->get()->getResultArray()[0];

        $data = [
            'title' => 'Laporkan Komentar',
            'id_kosan' => $id_kosan,
            'id_komentar' => $id_komentar,
            'id_user_komentar' => $id_user_komentar,
            'user_komentar' => $user_komentar,
            'komentar_dilaporkan' => $komentar
        ];

        return view('report_komentar/create', $data);
    }

    public function save()
    {
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'id_user_komentar' => $this->request->getVar('id_user_komentar'),
            'laporan_komentar' => $this->request->getVar('laporan_komentar'),
            'komentar_dilaporkan' => $this->request->getVar('komentar_dilaporkan'),
            'isReply' => $this->request->getVar('isReply'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->reportKomentarModel->insert($data);

        session()->setFlashdata('pesan', 'Komentar Berhasil Dilaporkan');

        return redirect()->to('/detail/' . $this->request->getVar('id_kosan'));
    }

    public function banned()
    {
        $id_user = $this->request->getVar('id_user');
        $data = [
            'status' => 'banned',
            'status_message' => 'Melakukan Komentar yang tidak pantas, pada komentar yang dilaporkan',
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->userInternal->update($id_user, $data);
        session()->setFlashdata('pesan', 'User Berhasil Dibanned');
        return redirect()->to('/admin/data_report_komentar');
    }

    public function pulihkan()
    {
        $id_user = $this->request->getVar('id_user');
        $data = [
            'status' => NULL,
            'status_message' => NULL,
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->userInternal->update($id_user, $data);
        session()->setFlashdata('pesan', 'User Berhasil Dibanned');
        return redirect()->to('/admin/data_report_komentar');
    }
}
