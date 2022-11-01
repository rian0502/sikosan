<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KosanModel;
use Faker\Factory;

class KosanSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        $kosan = new KosanModel();
        for ($i = 1; $i <= 10; $i++) {
            $kosan->save(
                [
                    'namaKost' => "Kosan " . $faker->LastName(),
                    'alamat' => $faker->address(),
                    'kota' => $faker->randomElement(
                        [
                            'Lampung Barat',
                            'Tanggamus',
                            'Lampung Selatan',
                            'Lampung Timur',
                            'Lampung Tengah',
                            'Lampung Utara',
                            'Way Kanan',
                            'Pesawaran',
                            'Tulang Bawang Barat',
                            'Tulang Bawang',
                            'Pesisir Barat',
                            'Bandar Lampung',
                            'Metro'
                        ],
                    ),
                    'deskripsi' => $faker->sentence(100),
                    'fasilitas' => $faker->sentence(100),
                    'harga' => $faker->numberBetween(500000, 1000000),
                    'type' => $faker->randomElement(
                        [
                            'Putra',
                            'Putri',
                            'Campur'
                        ]
                    ),
                    'idPemilik' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'deleted_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
