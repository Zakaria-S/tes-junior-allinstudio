<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_kategori = [
            'Laptop', 'Handphone', 'Pakaian',
            'Sepatu', 'Sparepart Motor', 'Helm'
        ];
        foreach ($list_kategori as $kategori) {
            DB::table('kategori')->insert([
                'nama_kategori' => $kategori,
            ]);
        }
    }
}
