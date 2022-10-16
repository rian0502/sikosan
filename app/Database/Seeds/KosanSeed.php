<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KosannModel;
use Faker\Factory;

class KosanSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        $kosan = new KosannModel();
        for ($i = 0; $i <= 8; $i++) {
            $kosan->save(
                [
                    'npm' => $faker->unique()->numberBetween(1000000000, 9999999999),
                    'nama' => $faker->name(),
                    'alamat' => $faker->address(),
                    'deskripsi' => $faker->text(100),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),

                    'id_kosan' => $i,
                    'namaKost' => "Kosan " . $faker->LastName(),
                    'alamat' => $faker->address(),
                    'kecamatan' => "tanjung karang",
                    'deskripsi' => $faker->sentence(5),
                    'fasilitas' => $faker->sentence(10),
                    'harga' => $faker->numberBetween(500000, 1000000),
                    'type' => $faker->randomElement(
                        [
                            'Pria',
                            'Putri'
                        ]
                    ),
                    'idPemilik' => $faker->unique()->numberBetween(1,10),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'deleted_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
