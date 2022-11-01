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
        $photo = new FotoKosanModel();
        for($i = 1 ; $i <= 10 ; $i++){
            $photo->save(
                [
                    // 'id_photo' => $i,
                    'id_kosan' => $i,
                    'nama_foto' => $faker->firstName(),

                ]
            );
        }
    }
}
