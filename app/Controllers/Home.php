<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
    public function owner(){
        return view('owners/login');
    }

    public function registerOwner(){
        return view('owners/register');
    }

    public function customer(){
        return view('customer/login');
    }

    public function registerCustomer(){
        return view('customer/register');
    }

    public function about(){
        return view('about');
    }
    public function pusatBantuan(){
        return view('pusatBantuan');
    }
    public function terms(){
        return view('terms');
    }
}
