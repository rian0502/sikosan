<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class Profil extends BaseController
{
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function index()
    {
        //
    
        return view('auth/join/profil_page');
    
    }
}
