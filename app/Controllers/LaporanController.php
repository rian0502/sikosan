<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LaporanController extends BaseController
{
    public function index()
    {
        return view('auth/admin/data_laporan_page');
    }
}
