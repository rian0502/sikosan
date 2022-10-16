<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('globals/index');
    }

    public function about()
    {
        return view('globals/about');
    }

    public function pusatBantuan()
    {
        return view('globals/pusat_bantuan');
    }

    public function terms()
    {
        return view('globals/terms');
    }

    public function detail()
    {
        return view('globals/detail_page');
    }

    // public function owner($halaman)
    // {
    //     return view('auth/owner/' . $halaman);
    // }
}
