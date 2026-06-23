<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Komentar;
use App\Models\ReplyKomentar;

class KomentarController extends BaseController
{

    public function __construct()
    {
        $this->komentarModel = new Komentar();
        $this->replyKomentar = new ReplyKomentar();
        $this->faker = \Faker\Factory::create('id_ID');
    }

    public function save_komentar()
    {

        $data = [
            'id_komentar' => $this->faker->unique()->uuid(),
            'id_user' => user_id(),
            'id_kosan' => $this->request->getVar('id_kosan'),
            'komentar' => htmlspecialchars($this->request->getVar('komentar')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];


        $this->komentarModel->insert($data);

        session()->setFlashdata('pesan', 'Komentar Berhasil ditambahkan');

        return redirect()->to('/detail/' . $this->request->getVar('id_kosan') . '/#tulis_komentar');
    }

    public function reply_komentar()
    {
        $data = [
            'id' => $this->faker->unique()->uuid(), 
            'id_user' => user_id(),
            'id_komentar' => $this->request->getVar('id_komentar'),
            'id_kosan' => $this->request->getVar('id_kosan'),
            'reply' => htmlspecialchars($this->request->getVar('reply')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->replyKomentar->insert($data);

        session()->setFlashdata('pesan', 'Berhasil membalas komentar');

        return redirect()->to('/detail/' . $this->request->getVar('id_kosan') . '/#tulis_komentar');
    }
    public function hapus_komentar() {
       $this->komentarModel->where('id_komentar', $this->request->getVar('id_komentar'))->delete();
       return redirect()->back();
    }

    public function hapusReplyKomentar() {
        $this->replyKomentar->where('id', $this->request->getVar('id_reply'))->delete();
        return redirect()->back();
    }
}
