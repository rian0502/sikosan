<?php

namespace App\Controllers;

use App\Models\KosanModel;
use App\Models\FotoKosanModel;
use App\Models\Komentar;
use App\Models\ReplyKomentar;
use App\Models\WishlistModel;

class Home extends BaseController
{
    protected $ModelKosan;
    public function __construct()
    {
        $this->ModelKosan = new KosanModel();
        $this->wishlistModel = new WishlistModel();
        $this->komentar = new Komentar();
        $this->replyKomen = new ReplyKomentar();
    }
    public function index()
    {

        $data_kosan = $this->ModelKosan->getAllKosan()->getResult();

        $data = array(
            'title' => 'Data Kosan',
            'kosan' => $data_kosan,
            'data_wish' => $this->wishlistModel->where('id_user', user_id())->find(),
        );

        return view('globals/index',  $data);
    }


    public function about()
    {
        return view('globals/about');
    }

    public function pusatBantuan()
    {
        return view('globals/pusat_bantuan');
    }

    public function terms()
    {
        return view('globals/terms');
    }

    public function detail($id)
    {

        $kosanModel = new KosanModel();
        $kosan = $kosanModel->where(['id_kosan' => $id])->find();
        $pemilik =  $kosanModel->join('users', ' users.id = kosan.idPemilik')->getWhere(['id_kosan' => $id])->getResult()[0];

        for ($i = 0; $i < count($kosan); $i++) {
            $kosan[$i]['gambar'] = (new FotoKosanModel())->where(['id_kosan' => $kosan[$i]['id_kosan']])->findAll();
        }

        $komen = $this->komentar->select('komentar.*, users.id,users.namaLengkap, users.foto')->join('users', 'users.id = komentar.id_user')->where('id_kosan', $id)->findAll();
        
        for ($i = 0; $i < count($komen); $i++) {
            $komen[$i]['reply'] = $this->replyKomen->select('reply_komentar.id AS id_reply,reply_komentar.*, users.id,users.namaLengkap, users.foto')->join('users', 'users.id = reply_komentar.id_user')->where(['reply_komentar.id_komentar' => $komen[$i]['id_komentar']])->findAll();
        }


        $data = [
            'title' => 'Kosan Anda | Owner',
            'pemilik' => $pemilik,
            'no' => substr($pemilik->notlp, 1),
            'kosan' => $kosan,
            'data_wish' => $this->wishlistModel->where('id_user', user_id())->find(),
            'komentar' => $komen,
            'id_pemilik' => $pemilik->id,
        ];
        return view('globals/detail_page', $data);
    }
}
