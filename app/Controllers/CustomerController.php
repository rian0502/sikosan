<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function index()
    {
        return view('auth/admin/data_customer_page');
    }

    public function profil()
    {
        return view('auth/join/profil_page');
    }
}
