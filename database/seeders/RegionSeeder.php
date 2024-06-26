<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Koto Kari'
            ]
        ];

        foreach($data as $item){
            Region::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'district_id' => 2
            ]);
        }
    }
}
