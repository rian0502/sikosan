<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoKosanModel;
use App\Models\KosanModel;

class KosanController extends BaseController
{

    // CONSTRUCTOR
    public function __construct()
    {
        $this->kosanModel = new KosanModel();
        $this->fotoKosanModel = new FotoKosanModel();
    }

    // INDEX
    public function index()
    {
        $data = [
            'title' => 'Cari Kosan',
        ];

        return view('auth/admin/data_kosan_page', $data);
    }

    // CREATE DATA KOSAN
    public function create()
    {

        session();
        $data = [
            'title' => 'Form Tambah Data Kosan | Owner',
            'validation' => \Config\Services::validation(),
        ];

        return view('auth/owner/tambah_kosan_page', $data);
    }

    // SAVE CREATE DATA KOSAN
    public function save()
    {
        $faker = \Faker\Factory::create('id_ID');
        $data_kosan = [
            'id_kosan' => $faker->unique()->uuid,
            'namaKost' => htmlspecialchars($this->request->getVar('namaKost')),
            'alamat' => htmlspecialchars($this->request->getVar('alamat')),
            'kota' => htmlspecialchars($this->request->getVar('kota')),
            'deskripsi' => htmlspecialchars($this->request->getVar('deskripsi')),
            'fasilitas' => htmlspecialchars($this->request->getVar('fasilitas')),
            'harga' => htmlspecialchars($this->request->getVar('harga')),
            'type' => htmlspecialchars($this->request->getVar('type')),
            'idPemilik' => user_id(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // validasi data kosan
        $validated = $this->validate(
            [
                'namaKost' => [
                    'rules' => 'required|min_length[5]|max_length[50]',
                    'errors' => [
                        'required' => 'Nama kosan harus diisi',
                        'min_length' => 'Nama kosan minimal 5 karakter',
                        'max_length' => 'Nama kosan maksimal 50 karakter',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required|min_length[5]|max_length[100]',
                    'errors' => [
                        'required' => 'Alamat kosan harus diisi',
                        'min_length' => 'Alamat kosan minimal 5 karakter',
                        'max_length' => 'Alamat kosan maksimal 100 karakter',
                    ]
                ],
                'kota' => [
                    'rules' => 'required|in_list[Lampung Barat,Tanggamus,Lampung Selatan,Lampung Timur,Lampung Tengah,Lampung Utara,Way Kanan,Pesawaran,Tulang Bawang Barat,Tulang Bawang,Pesisir Barat,Bandar Lampung,Metro]',
                    'errors' => [
                        'required' => 'Kecamatan kosan harus diisi',
                        'in_list' => 'Kota/Kabupaten kosan harus dipilih dengan benar',
                    ]
                ],
                'deskripsi' => [
                    'rules' => 'required|min_length[5]|max_length[150]',
                    'errors' => [
                        'required' => 'Deskripsi kosan harus diisi',
                        'min_length' => 'Deskripsi kosan minimal 5 karakter',
                        'max_length' => 'Deskripsi kosan maksimal 150 karakter',
                    ]
                ],
                'fasilitas' => [
                    'rules' => 'required|min_length[5]|max_length[150]',
                    'errors' => [
                        'required' => 'Fasilitas kosan harus diisi',
                        'min_length' => 'Fasilitas kosan minimal 5 karakter',
                        'max_length' => 'Fasilitas kosan maksimal 150 karakter',
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
                    'rules' => 'required|in_list[Putra,Putri,Campur]',
                    'errors' => [
                        'required' => 'Type kosan harus diisi',
                        'in_list' => 'Type kosan harus dipilih dengan benar',
                    ]
                ],
                'foto_1' => [
                    'rules' => 'uploaded[foto_1]|max_size[foto_1,1024]|is_image[foto_1]|mime_in[foto_1,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Foto kosan harus diisi',
                        'max_size' => 'Ukuran foto kosan maksimal 1 MB',
                        'is_image' => 'File yang diupload harus berupa gambar',
                        'mime_in' => 'File yang diupload harus berupa gambar',
                    ]
                ],
            ]
        );

        // // jika validasi error
        if ($validated == FALSE) {
            return redirect()->back()->withInput();
        }

        //Insert data kosan ke database
        $this->kosanModel->insert($data_kosan);

        // mengambil id kosan yang baru saja diinputkan
        $idKosanInsert = $this->kosanModel->getInsertID();

        // Mengambil data foto kosan dari input form
        $foto_1 = $this->request->getFile('foto_1');
        $name_foto1 = $foto_1->getRandomName();
        $foto_2 = $this->request->getFile('foto_2');
        $foto_3 = $this->request->getFile('foto_3');

        $data_foto_kosan = [
            'id_kosan' => $idKosanInsert,
            'id_foto' => $faker->unique()->uuid,
            'nama_foto' => $name_foto1,
        ];

        $this->fotoKosanModel->insert($data_foto_kosan);

        // Memindahkan foto kosan ke local storage
        $foto_1->move('../public/foto_kosan', $name_foto1);

        if ($foto_2->getName() !== '') {
            $name_foto2 = $foto_2->getRandomName();
            $data_foto_kosan = [
                'id_kosan' => $idKosanInsert,
                'id_foto' => $faker->unique()->uuid,
                'nama_foto' => $name_foto2,
            ];

            $this->fotoKosanModel->insert($data_foto_kosan);

            $foto_2->move('../public/foto_kosan', $name_foto2);
        }

        if ($foto_3->getName() !== '') {
            $name_foto3 = $foto_3->getRandomName();
            $data_foto_kosan = [
                'id_kosan' => $idKosanInsert,
                'id_foto' => $faker->unique()->uuid,
                'nama_foto' => $name_foto3,
            ];
            $this->fotoKosanModel->insert($data_foto_kosan);
            $foto_3->move('../public/foto_kosan', $name_foto3);
        }

        return redirect()->to('/owner/kosan_anda');
    }

    // DELETE DATA KOSAN
    public function delete($id_kosan)
    {
        $kost = $this->kosanModel->where('id_kosan', $id_kosan)->first();
        if ($kost['idPemilik'] != user_id()) {
            return redirect()->to('/owner/kosan_anda');
        }

        $imageFile = $this->fotoKosanModel->where('id_kosan', $id_kosan)->findAll();
        foreach ($imageFile as $image) {
            unlink('../public/foto_kosan/' . $image['nama_foto']);
        }
        $this->kosanModel->delete($id_kosan);

        return redirect()->to('/owner/kosan_anda');
    }

    // EDIT DATA KOSAN
    public function edit($id_kosan)
    {   
        $kost = $this->kosanModel->where('id_kosan', $id_kosan)->first();
        if ($kost['idPemilik'] != user_id()) {
            return redirect()->to('/owner/kosan_anda');
        }
        session();
        $data = [
            'title' => 'Ubah Data Kosan',
            'kosan' => $kost,
            'foto' => (new FotoKosanModel())->where('id_kosan', $id_kosan)->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/owner/edit_kosan_page', $data);
    }

    // UPDATE EDITED DATA KOSAN
    public function update()
    {
        $faker = \Faker\Factory::create('id_ID');
        $jumlahFoto = count($this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll());
        $data = [
            'namaKost' => htmlspecialchars($this->request->getVar('namaKost')),
            'alamat' => htmlspecialchars($this->request->getVar('alamat')),
            'kota' => htmlspecialchars($this->request->getVar('kota')),
            'deskripsi' => htmlspecialchars($this->request->getVar('deskripsi')),
            'fasilitas' => htmlspecialchars($this->request->getVar('fasilitas')),
            'harga' => htmlspecialchars($this->request->getVar('harga')),
            'type' => htmlspecialchars($this->request->getVar('type')),
            'idPemilik' => user_id(),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $validated = $this->validate(
            [
                'namaKost' => [
                    'rules' => 'required|min_length[5]|max_length[50]',
                    'errors' => [
                        'required' => 'Nama kosan harus diisi',
                        'min_length' => 'Nama kosan minimal 5 karakter',
                        'max_length' => 'Nama kosan maksimal 50 karakter',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required|min_length[5]|max_length[100]',
                    'errors' => [
                        'required' => 'Alamat kosan harus diisi',
                        'min_length' => 'Alamat kosan minimal 5 karakter',
                    ]
                ],
                'kota' => [
                    'rules' => 'required|in_list[Lampung Barat,Tanggamus,Lampung Selatan,Lampung Timur,Lampung Tengah,Lampung Utara,Way Kanan,Pesawaran,Tulang Bawang Barat,Tulang Bawang,Pesisir Barat,Bandar Lampung,Metro]',
                    'errors' => [
                        'required' => 'Kota kosan harus diisi',
                        'in_list' => 'Kota/Kabupaten kosan harus dipilih dengan benar',
                    ]
                ],
                'deskripsi' => [
                    'rules' => 'required|min_length[5]|max_length[150]',
                    'errors' => [
                        'required' => 'Deskripsi kosan harus diisi',
                        'min_length' => 'Deskripsi kosan minimal 5 karakter',
                    ]
                ],
                'fasilitas' => [
                    'rules' => 'required|max_length[100]',
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
                    'rules' => 'required|in_list[Putra,Putri,Campur]',
                    'errors' => [
                        'required' => 'Type kosan harus diisi',
                        'in_list' => 'Type kosan harus dipilih dengan benar',
                    ]
                ],
                'foto_1' => [
                    'rules' => 'max_size[foto_1,1024]|is_image[foto_1]|mime_in[foto_1,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran foto kosan maksimal 1 MB',
                        'is_image' => 'File yang diupload harus berupa gambar',
                        'mime_in' => 'File yang diupload harus berupa gambar',
                    ]
                ],
            ]
        );

        // // jika validasi error
        if ($validated == FALSE) {
            return redirect()->back()->withInput();
        }

        $this->kosanModel->update($this->request->getVar('id_kosan'), $data);
        if ($this->request->getFile('foto_1')->getName() !== '') {

            $foto = $this->request->getFile('foto_1');
            $namaFoto = $foto->getRandomName();
            unlink('../public/foto_kosan/' . $this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[0]['nama_foto']);
            $data_foto = [
                'nama_foto' => $namaFoto,
                'id_foto' => $faker->unique()->uuid,
                'id_kosan' => $this->request->getVar('id_kosan'),
            ];
            $this->fotoKosanModel->update($this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[0]['id_foto'], $data_foto);
            $foto->move('../public/foto_kosan', $namaFoto);
        }
        if ($this->request->getFile('foto_2')->getName() !== '') {
            $foto = $this->request->getFile('foto_2');
            $namaFoto = $foto->getRandomName();
            $data_foto = [
                'nama_foto' => $namaFoto,
                'id_foto' => $faker->unique()->uuid,
                'id_kosan' => $this->request->getVar('id_kosan'),
            ];
            if ($jumlahFoto > 1) {
                unlink('../public/foto_kosan/' . $this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[1]['nama_foto']);
                $this->fotoKosanModel->update($this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[1]['id_foto'], $data_foto);
            } else {
                $this->fotoKosanModel->insert($data_foto);
            }
            $foto->move('../public/foto_kosan', $namaFoto);
        }
        if ($this->request->getFile('foto_3')->getName() !== '') {
            $foto = $this->request->getFile('foto_3');
            $namaFoto = $foto->getRandomName();
            $data_foto = [
                'nama_foto' => $namaFoto,
                'id_foto' => $faker->unique()->uuid,
                'id_kosan' => $this->request->getVar('id_kosan'),
            ];
            if ($jumlahFoto > 2) {
                unlink('../public/foto_kosan/' . $this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[2]['nama_foto']);
                $this->fotoKosanModel->update($this->fotoKosanModel->where('id_kosan', $this->request->getVar('id_kosan'))->findAll()[2]['id_foto'], $data_foto);
            } else {
                $this->fotoKosanModel->insert($data_foto);
            }

            $foto->move('../public/foto_kosan', $namaFoto);
        }
        return redirect()->to('/owner/kosan_anda');
    }
}
