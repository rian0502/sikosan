<?php

namespace App\Controllers;

use App\Models\KosanModel;
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

    public function detail()
    {
        return view('globals/detail_page');
    }

    // public function owner($halaman)
    // {
    //     return view('auth/owner/' . $halaman);
    // }
}
