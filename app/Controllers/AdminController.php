<?php

namespace App\Controllers;

use App\Controllers\BaseController;
<<<<<<< HEAD

class AdminController extends BaseController
{
=======
use Myth\Auth\Models\UserModel;

class AdminController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
        ];

        return view('auth/admin/dashboard_admin', $data);
    }
<<<<<<< HEAD
=======

    public function data_user_banned()
    {
        $data = [
            'title' => 'Data User Banned',
            'users' => $this->userModel->where(['status' => 'banned'])->orderBy('updated_at', 'DESC')->findAll()
        ];

        return view('auth/admin/data_user_banned', $data);
    }
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
}
