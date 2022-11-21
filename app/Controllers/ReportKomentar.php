<?php

namespace App\Controllers;

use App\Controllers\BaseController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\ReportKomentarModel;
=======
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
use App\Models\Komentar;
use App\Models\ReplyKomentar;
use App\Models\ReportKomentarModel;
use App\Models\Users;
<<<<<<< HEAD
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
use Myth\Auth\Models\UserModel;

class ReportKomentar extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->reportKomentarModel = new ReportKomentarModel();
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->userInternal = new Users();
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
        $this->userInternal = new Users();
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
    }

    public function index()
    {

        $pemilik_komentar = $this->reportKomentarModel->getUserKomentar();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
        $data = [
            'title' => 'Laporan Komentar',
            'reports' => $this->reportKomentarModel->getReport(),
            'pemilik_komentar' => $pemilik_komentar,
        ];
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'id_komentar' => $this->request->getVar('id_komentar'),
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
            'id_komentar' => $this->request->getVar('id_komentar'),
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78

    public function delete_laporan()
    {
        $id_report = $this->request->getVar('id_report_komentar');

        $this->reportKomentarModel->delete($id_report);

        session()->setFlashdata('pesan', 'Laporan berhasil dihapus');

        return redirect()->to('/admin/data_report_komentar');
    }

    public function delete_komentar()
    {
        $is_reply = $this->request->getVar('isReply');
        $id_report = $this->request->getVar('id_report_komentar');
        $id_komentar = $this->request->getVar('id_komentar');


        if ($is_reply == 0) {
            $komentarModel = new Komentar();
            $replyKomentarModel = new ReplyKomentar();
            $replyKomentar = $replyKomentarModel->select('id')->where(['id_komentar' => $id_komentar])->findAll();

            foreach ($replyKomentar as $reply) {
                $reportKomentar = $this->reportKomentarModel->where(['id_komentar' => $reply['id'], 'isReply' => 1])->findAll();

                if (count($reportKomentar) !== 0) {
                    $this->reportKomentarModel->where(['id_komentar' => $reply['id'], 'isReply' => 1])->delete();
                }
            }

            $komentarModel->where(['id_komentar' => $id_komentar])->delete();
        } else {
            $replyKomentarModel = new ReplyKomentar();
            $replyKomentar = $replyKomentarModel->select('id')->where(['id_komentar' => $id_komentar])->findAll();

            foreach ($replyKomentar as $reply) {
                $reportKomentar = $this->reportKomentarModel->where(['id_komentar' => $reply['id'], 'isReply' => 1])->findAll();

                if (count($reportKomentar) !== 0) {
                    $this->reportKomentarModel->where(['id_komentar' => $reply['id'], 'isReply' => 1])->delete();
                }

                $replyKomentarModel->where(['id' => $reply['id']])->delete();
            }
        }

        $this->reportKomentarModel->delete($id_report);

        session()->setFlashdata('pesan', 'Komentar Berhasil Dihapus');

        return redirect()->to('/admin/data_report_komentar');
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
        return redirect()->to('/admin/data_user_banned');
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
        session()->setFlashdata('pesan', 'User Berhasil Di Pulihkan');
        return redirect()->to('/admin/data_user_banned');
    }
<<<<<<< HEAD
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
}
