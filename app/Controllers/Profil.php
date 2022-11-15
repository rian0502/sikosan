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
    public function edit(){

        return view('auth/join/edit_profil_page');
    }
    public function update(){
        return view('auth/join/profile_page');
    }

    public function publicProfile($id){
        $user = $this->userModel->find($id);
        $data = [
            'user' => $user
        ];

        dd($data);
        return view('auth/join/public_profile_page', $data);
    }
}
