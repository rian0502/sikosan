<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\FotoKosanModel; 
use Faker\Factory;
class FotoKosanSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        $kosanList = $this->db->table('kosan')->get()->getResultArray();
        
        foreach ($kosanList as $kosan) {
            $this->db->table('foto_kosan')->insert([
                'id_foto'   => bin2hex(random_bytes(16)),
                'id_kosan'  => $kosan['id_kosan'], 
                'nama_foto' => $faker->firstName(),
            ]);
        }
    }
}
