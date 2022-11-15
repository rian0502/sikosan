<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoKosanModel;
use App\Models\KosanModel;

class OwnerController extends BaseController
{  
    public function __construct(){
        $this->kosanModel = new KosanModel();
    }

    public function index()
    {

        return view('auth/admin/data_owner_page');
    }

    public function halaman_pemilik()
    {
        $info = $this->kosanModel->getDashboardData();
        
        $data = [
            'title' => 'Profile',
            'jumlah_kos' => $info[0]['jumlah_kos'],
            'rata_rata' =>    ($info[0]['jumlah_kos'] < 1) ? '0' : floatval($info[0]['total_harga'])/floatval($info[0]['jumlah_kos']) ,
        ];


        return view('auth/owner/halaman_pemilik_page', $data);
    }

    public function kosan_anda()
    {
        
        $kosanModel = new KosanModel();
        $kosan = $kosanModel->where(['idPemilik' => user_id()])->findAll();
        for($i = 0 ; $i < count($kosan); $i++){
            $kosan[$i]['gambar'] = (new FotoKosanModel())->where(['id_kosan'=> $kosan[$i]['id_kosan']])->findAll();
        }
        
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
