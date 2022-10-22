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

        $data = [
            'namaKost' => $this->request->getVar('namaKost'),
            'alamat' => $this->request->getVar('alamat'),
            'kota' => $this->request->getVar('kota'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'harga' => $this->request->getVar('harga'),
            'type' => $this->request->getVar('type'),
            'idPemilik' => user_id(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $validated = [
            'namaKost' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Nama kosan harus diisi',
                    'min_length' => 'Nama kosan minimal 5 karakter',
                    'max_length' => 'Nama kosan maksimal 50 karakter',
                ]
            ],
         
            'alamat' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Alamat kosan harus diisi',
                    'min_length' => 'Alamat kosan minimal 5 karakter',
                ]
            ],

            'kota' => [
                'rules' => 'required|inlist[Lampung Barat,Tanggamus,Lampung Selatan,Lampung Timur,Lampung Tengah,Lampung Utara,Way Kanan,Pesawaran,Tulang Bawang Barat,Tulang Bawang,Pesisir Barat,Bandar Lampung,Metro]',
                'errors' => [
                    'required' => 'Kecamatan kosan harus diisi',
                    'inlist' => 'Kota/Kabupaten kosan harus dipilih dengan benar',
                ]
            ],

            'deskripsi' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Deskripsi kosan harus diisi',
                    'min_length' => 'Deskripsi kosan minimal 5 karakter',
                ]
            ],
            'fasilitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fasilitas kosan harus diisi',
                ]
            ],
            'harga' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Harga kosan harus diisi',
                    'numeric' => 'Harga kosan harus berupa angka',
                ]
            ],
            'type' => [
                'rules' => 'required|inlist[Putra,Putri]',
                'errors' => [
                    'required' => 'Type kosan harus diisi',
                    'inlist' => 'Type kosan harus dipilih dengan benar',
                ]
            ],
        ];
        if (!$validated) {
            return redirect()->to('/onlyOwners/create')->withInput();
        }
        $idKosanInsert = $this->kosanModel->getInsertID();

        $foto_1 = $this->request->getFile('foto_1');
        $name_foto1 = $foto_1->getRandomName();
        $foto_2 = $this->request->getFile('foto_2');
        $foto_3 = $this->request->getFile('foto_3');

        $data = [
            'id_kosan' => $idKosanInsert,
            'nama_foto' => $name_foto1,
        ];
        $this->fotoKosanModel->insert($data);
        $foto_1->move(WRITEPATH . '../public/foto_kosan',$name_foto1);
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
