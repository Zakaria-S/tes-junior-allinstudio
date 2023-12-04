<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'email' => 'admin@allinstudio.com',
            'phone' => '081234567890',
            'username' => 'admin',
            'password' => '12345'
        ]);
    }
}
