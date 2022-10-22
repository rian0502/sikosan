<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KosanModel;

class OwnerController extends BaseController
{

    public function index()
    {
        return view('auth/admin/data_owner_page');
    }

    public function halaman_pemilik()
    {
        return view('auth/owner/halaman_pemilik_page');
    }

    public function kosan_anda()
    {
        $kosanModel = new KosanModel();
        $kosan = $kosanModel->getKosanByIdUser();

        $data = [
            'title' => 'Kosan Anda | Owner',
            'kosan' => $kosan
        ];

        return view('auth/owner/kosan_anda_page', $data);
    }

    public function detail_kosan_anda($id_kosan)
    {
        $kosanModel = new KosanModel();
        $kosan = $kosanModel->getKosanByIdKosan($id_kosan);

        $data = [
            'title' => 'Detail Kosan Anda | Owner',
            'kosan' => $kosan
        ];

        return view('auth/owner/detail_kosan_anda_page', $data);
    }

    public function profil()
    {
        return view('auth/join/profil_page');
    }
}
