<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Kuantan Mudik',
                'slug' => 'KM'
            ],
            [
                'name' => 'Kuantan Tengah',
                'slug' => 'KT'
            ],
            [
                'name' => 'Singingi',
                'slug' => 'SNG'
            ],
            [
                'name' => 'Kuantan Hilir',
                'slug' => 'KH'
            ],
            [
                'name' => 'Cerenti',
                'slug' => 'CRT'
            ],
            [
                'name' => 'Benai',
                'slug' => 'BNI'
            ],
            [
                'name' => 'Gunung Toar',
                'slug' => 'GT'
            ],
            [
                'name' => 'Singingi Hilir',
                'slug' => 'SH'
            ],
            [
                'name' => 'Pangean',
                'slug' => 'PNG'
            ],
            [
                'name' => 'Logas Tanah Darat',
                'slug' => 'LTD'
            ],
            [
                'name' => 'Inuman',
                'slug' => 'INM'
            ],
            [
                'name' => 'Hulu Kuantan',
                'slug' => 'HK'
            ],
            [
                'name' => 'Kuantan Hilir Seberang',
                'slug' => 'KHS'
            ],
            [
                'name' => 'Sentajo Raya',
                'slug' => 'SR'
            ],
            [
                'name' => 'Indragiri Hulu',
                'slug' => 'INDR'
            ]
        ];

        foreach($data as $item){
            District::create($item);
        }
    }
}
