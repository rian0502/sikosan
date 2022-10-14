<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('landing_page');
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
