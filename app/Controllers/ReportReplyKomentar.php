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
    }

    public function create($id_kosan, $id_reply_komentar, $id_user_reply_komentar, $reply)
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======

>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
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
<<<<<<< HEAD
<<<<<<< HEAD
        // dd($this->request->getVar());

        $data = [
            'id_user' => $this->request->getVar('id_user'),
=======
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'id_komentar' => $this->request->getVar('id_reply_komentar'),
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'id_komentar' => $this->request->getVar('id_reply_komentar'),
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
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
