<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merk;
use App\Models\Kategori;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_produk = [
            [
                'nama_produk' => 'HP 14 inch Laptop 14s-fq0562AU',
                'harga' => 5599000,
                'merk_id' => 'HP',
                'kategori_id' => 'Laptop'
            ],
            [
                'nama_produk' => 'HP 245 G9 14 inch Business Laptop',
                'harga' => 7249000,
                'merk_id' => 'HP',
                'kategori_id' => 'Laptop'
            ],
            [
                'nama_produk' => 'iPhone 15 Pro',
                'harga' => 20999000,
                'merk_id' => 'Apple',
                'kategori_id' => 'Handphone'
            ],
            [
                'nama_produk' => 'Shockbreaker Matic Tabung Atas KTC Extreme',
                'harga' => 205000,
                'merk_id' => 'KTC',
                'kategori_id' => 'Sparepart Motor'
            ],
            [
                'nama_produk' => 'NJS KAIROZ SILVER STEEL - Helm Half Face',
                'harga' => 585000,
                'merk_id' => 'NJS',
                'kategori_id' => 'Helm'
            ],
            [
                'nama_produk' => 'Jaket Fleece Ritsleting Lengan Panjang',
                'harga' => 399000,
                'merk_id' => 'Uniqlo',
                'kategori_id' => 'Pakaian'
            ],
            [
                'nama_produk' => 'Eiger Ardonix Shoes',
                'harga' => 1055000,
                'merk_id' => 'Eiger',
                'kategori_id' => 'Sepatu'
            ]
        ];
        foreach ($list_produk as $produk) {
            Produk::create([
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'merk_id' => Merk::where('nama_merk', $produk['merk_id'])->first()->id,
                'kategori_id' => Kategori::where('nama_kategori', $produk['kategori_id'])->first()->id
            ]);
        }
    }
}
