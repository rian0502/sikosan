<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReportKosanModel;

class ReportKosanController extends BaseController
{

    public function __construct()
    {
        $this->reportKosanModel = new ReportKosanModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Laporan Kosan',
            'reports' => $this->reportKosanModel->getReport(),
        ];

        return view('auth/admin/data_report_kosan', $data);
    }
}
