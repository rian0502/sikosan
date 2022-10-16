<?php

namespace App\Controllers;
use App\Models\KosannModel; //

class Home extends BaseController
{
    protected $ModelKosan;
    public function __construct()
    {
        $this->ModelKosan = new KosannModel();
        # code...
    }
    public function index(){
        $data_kosan = $this->ModelKosan->getKosan()->getResult();
        $data = array(
            'title'=>'Data Kosan',
            'kosan'=>$data_kosan
        );
        return view('landing_page',  $data);
    }
    public function about(){
        return view('about');
    }
    public function pusatBantuan()
    {
        return view('pusatBantuan');
    }
    public function terms()
    {
        return view('terms');
    }
    public function detail()
    {
        return view('detail_page');
    }
}
