<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KosanController extends BaseController
{
    public function index()
    {
        return view('auth/admin/data_kosan_page');
    }
}
