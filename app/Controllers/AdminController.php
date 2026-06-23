<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class AdminController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
        ];

        return view('auth/admin/dashboard_admin', $data);
    }

    public function data_user_banned()
    {
        $data = [
            'title' => 'Data User Banned',
            'users' => $this->userModel->where(['status' => 'banned'])->orderBy('updated_at', 'DESC')->findAll()
        ];

        return view('auth/admin/data_user_banned', $data);
    }
}
