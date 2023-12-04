<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_merk = [
            'Acer', 'Redmi', 'Lenovo',
            'Asus', 'HP', 'Apple',
            'Uniqlo', 'Adidas', 'Eiger',
            'Screamous', 'Ventella', 'Nike',
            'Yamaha', 'Honda', 'BRT', 'RCB',
            'KTC', 'NJS', 'AGV', 'KYT'
        ];
        foreach ($list_merk as $merk) {
            DB::table('merk')->insert([
                'nama_merk' => $merk,
            ]);
        }
    }
}
