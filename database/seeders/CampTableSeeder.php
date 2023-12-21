<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Str;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title'         => 'Gila Belajar',
                // 'slug'  => Str:slug('Gila Belajar')
                'slug'          => 'gila-belajar',
                'price'         => 200,
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
                'title'         => 'Baru Mulai',
                'slug'          => 'baru-mulai',
                'price'         => 140,
                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ],

        ];

        // foreach ($camps as $key => $camp) {
        //     Camps::create($camp);
        // }

        // cara terbaik
        Camps::insert($camps);
    }
}
