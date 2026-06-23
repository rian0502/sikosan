<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KosanModel;
use App\Models\ReportKosanModel;

class ReportKosan extends BaseController
{
    public function __construct()
    {
        $this->kosanModel = new KosanModel();
        $this->reportKosanModel = new ReportKosanModel();
    }

    public function index()
    {
    }
}
