<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        return view('auth/owner/kosan_anda_page');
    }

    public function profil()
    {
        return view('auth/join/profil_page');
    }
}
