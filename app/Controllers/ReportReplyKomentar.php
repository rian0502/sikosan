<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReportKomentarModel;
use Myth\Auth\Models\UserModel;

class ReportReplyKomentar extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->reportKomentarModel = new ReportKomentarModel();
        $this->faker = \Faker\Factory::create('id_ID');
    }

    public function create($id_kosan, $id_reply_komentar, $id_user_reply_komentar, $reply)
    {

        $user_reply = $this->userModel->where('id', $id_user_reply_komentar)->get()->getResultArray()[0];

        $data = [
            'title' => 'Laporkan Komentar',
            'id_kosan' => $id_kosan,
            'id_reply_komentar' => $id_reply_komentar,
            'id_user_reply_komentar' => $id_user_reply_komentar,
            'user_reply' => $user_reply,
            'komentar_dilaporkan' => $reply
        ];

        return view('/report_reply_komentar/create', $data);
    }

    public function save()
    {
        $data = [
            'id_report_komentar' => $this->faker->unique()->uuid(),
            'id_user' => $this->request->getVar('id_user'),
            'id_komentar' => $this->request->getVar('id_reply_komentar'),
            'id_user_komentar' => $this->request->getVar('id_user_reply_komentar'),
            'laporan_komentar' => $this->request->getVar('laporan_reply_komentar'),
            'komentar_dilaporkan' => $this->request->getVar('komentar_dilaporkan'),
            'isReply' => $this->request->getVar('isReply'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->reportKomentarModel->insert($data);

        session()->setFlashdata('pesan', 'Komentar Berhasil Dilaporkan');

        return redirect()->to('/detail/' . $this->request->getVar('id_kosan'));
    }
}
