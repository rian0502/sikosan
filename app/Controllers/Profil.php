<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use Myth\Auth\Models\UserModel;

class Profil extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->user = new Users();
    }
    public function index()
    {
        //

        return view('auth/join/profil_page');
    }
    public function edit()
    {
        return view('auth/join/edit_profil_page');
    }
    public function update()
    {

        if (user()->foto == "") {
            $data = [
                'namaLengkap' => htmlspecialchars($this->request->getVar('namaLengkap')),
                'notlp' => htmlspecialchars($this->request->getVar('notlp')),
            ];
            $validat = $this->validate(
                [
                    'namaLengkap' => [
                        'rules' => 'required|max_length[50]|min_length[3]',
                        'errors' => [
                            'required' => 'Nama Lengkap harus diisi',
                            'max_length' => 'Nama Lengkap maksimal 50 karakter',
                            'min_length' => 'Nama Lengkap minimal 3 karakter',
                        ]
                    ],
                    'notlp' => [
                        'rules' => 'required|numeric',
                        'errors' => [
                            'required' => 'No Telepon harus diisi',
                            'numeric' => 'No Telepon harus berupa angka',
                        ]
                    ],
                    'foto' => [
                        'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                        'errors' => [
                            'max_size' => 'Ukuran foto terlalu besar',
                            'is_image' => 'Yang anda pilih bukan gambar',
                            'mime_in' => 'Yang anda pilih bukan gambar',
                        ]
                    ],
                ]
            );
            if (!$validat) {
                session()->setFlashdata('pesan', 'Data gagal diubah');
                return redirect()->to('/profil/edit')->withInput();
            } else {
                $fileFoto = $this->request->getFile('foto');
                $namaFoto = $fileFoto->getRandomName();
                $data['foto'] = $namaFoto;
                $fileFoto->move('../public/foto_profile', $namaFoto);
                $this->user->update(user()->id, $data);
                return redirect()->to('/customer/profil');
            }
        } else {
            if ($this->request->getFile('foto')->getName() == "") {
                $data = [
                    'namaLengkap' => htmlspecialchars($this->request->getVar('namaLengkap')),
                    'notlp' => htmlspecialchars($this->request->getVar('notlp')),
                ];
                $validat = $this->validate(
                    [
                        'namaLengkap' => [
                            'rules' => 'required|max_length[50]|min_length[3]',
                            'errors' => [
                                'required' => 'Nama Lengkap harus diisi',
                                'max_length' => 'Nama Lengkap maksimal 50 karakter',
                                'min_length' => 'Nama Lengkap minimal 3 karakter',
                            ]
                        ],
                        'notlp' => [
                            'rules' => 'required|numeric',
                            'errors' => [
                                'required' => 'No Telepon harus diisi',
                                'numeric' => 'No Telepon harus berupa angka',
                            ]
                        ],
                    ]
                );
                if (!$validat) {
                    session()->setFlashdata('pesan', 'Data gagal diubah');
                    return redirect()->to('/profil/edit')->withInput();
                } else {
                    $this->user->update(user()->id, $data);
                    return redirect()->to('/customer/profil');
                }
            } else {
                unlink('../public/foto_profile/' . user()->foto);
                $data = [
                    'namaLengkap' => htmlspecialchars($this->request->getVar('namaLengkap')),
                    'notlp' => htmlspecialchars($this->request->getVar('notlp')),
                ];
                $validat = $this->validate(
                    [
                        'namaLengkap' => [
                            'rules' => 'required|max_length[50]|min_length[3]',
                            'errors' => [
                                'required' => 'Nama Lengkap harus diisi',
                                'max_length' => 'Nama Lengkap maksimal 50 karakter',
                                'min_length' => 'Nama Lengkap minimal 3 karakter',
                            ]
                        ],
                        'notlp' => [
                            'rules' => 'required|numeric',
                            'errors' => [
                                'required' => 'No Telepon harus diisi',
                                'numeric' => 'No Telepon harus berupa angka',
                            ]
                        ],
                        'foto' => [
                            'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                            'errors' => [
                                'max_size' => 'Ukuran foto terlalu besar',
                                'is_image' => 'Yang anda pilih bukan gambar',
                                'mime_in' => 'Yang anda pilih bukan gambar',
                            ]
                        ],
                    ]
                );
                if (!$validat) {
                    session()->setFlashdata('pesan', 'Data gagal diubah');
                    return redirect()->to('/profil/edit')->withInput();
                } else {
                    $fileFoto = $this->request->getFile('foto');
                    $namaFoto = $fileFoto->getRandomName();
                    $data['foto'] = $namaFoto;
                    $fileFoto->move('../public/foto_profile', $namaFoto);
                    $this->user->update(user()->id, $data);
                    return redirect()->to('/customer/profil');
                }
            }
        }
    }
}
