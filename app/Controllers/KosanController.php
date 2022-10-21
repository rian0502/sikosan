<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoKosanModel;
use App\Models\KosanModel;

class KosanController extends BaseController
{

    public function __construct()
    {
        $this->kosanModel = new KosanModel();
        $this->fotoKosanModel = new FotoKosanModel();
    }

    public function index()
    {
        return view('auth/admin/data_kosan_page');
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Kosan | Owner',
        ];

        return view('auth/owner/tambah_kosan_page', $data);
    }

    public function save()
    {
        $this->kosanModel->save([
            'namaKost' => $this->request->getVar('namaKost'),
            'alamat' => $this->request->getVar('alamat'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'harga' => $this->request->getVar('harga'),
            'type' => $this->request->getVar('type'),
            'idPemilik' => user_id(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $idKosanInsert = $this->kosanModel->getInsertID();

        $foto_1 = $this->request->getFile('foto_1');
        $foto_2 = $this->request->getFile('foto_2');
        $foto_3 = $this->request->getFile('foto_3');

        $data = [
            'id_kosan' => $idKosanInsert,
            'nama_foto' => $foto_1->getName(),
        ];

        $this->fotoKosanModel->insert($data);

        $foto_1->move(WRITEPATH . '../public/foto_kosan/');

        if ($foto_2 !== null) {
            $data = [
                'id_kosan' => $idKosanInsert,
                'nama_foto' => $foto_2->getName(),
            ];

            $this->fotoKosanModel->insert($data);

            $foto_2->move(WRITEPATH . '../public/foto_kosan/');
        }

        if ($foto_2 !== null) {
            $data = [
                'id_kosan' => $idKosanInsert,
                'nama_foto' => $foto_3->getName(),
            ];

            $this->fotoKosanModel->insert($data);
            $foto_3->move(WRITEPATH . '../public/foto_kosan/');
        }

        return redirect()->to('auth/owner/kosan_anda_page');
    }

    public function delete($id_kosan)
    {
        $this->fotoKosanModel->delete($id_kosan);

        return redirect()->to('auth/owner/kosan_anda_page');
    }

    public function edit($id_kosan)
    {
        $data = [
            'title' => 'Ubah Data Kosan',
            'kosan' => $this->kosanModel->getKosan($id_kosan)
        ];

        return view('auth/owner/edit_kosan', $data);
    }

    public function update($id_kosan)
    {
    }
}
