<?php

namespace App\Controllers;

use App\Models\KosanModel;
use App\Models\FotoKosanModel;
use App\Models\WishlistModel;

class Home extends BaseController
{
    protected $ModelKosan;
    public function __construct()
    {
        $this->ModelKosan = new KosanModel();
        $this->wishlistModel = new WishlistModel();
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
        for ($i = 0; $i < count($kosan); $i++) {
            $kosan[$i]['gambar'] = (new FotoKosanModel())->where(['id_kosan' => $kosan[$i]['id_kosan']])->findAll();
        }

        $data = [
            'title' => 'Kosan Anda | Owner',
            'pemilik' => user()->namaLengkap,
            'kosan' => $kosan
        ];

        return view('globals/detail_page', $data);
    }

    // public function owner($halaman)
    // {
    //     return view('auth/owner/' . $halaman);
    // }
}
