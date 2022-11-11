<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
        ];

        return view('auth/admin/dashboard_admin', $data);
    }
}
