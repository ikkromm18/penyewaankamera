<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcaraSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan data contoh ke tabel acara
        DB::table('acaras')->insert([
            [
                'jenis_acara' => 'Live',
                'harga' => 3000000,

            ],
            [
                'jenis_acara' => 'Maulid',
                'harga' => 3000000,

            ],
            [
                'jenis_acara' => 'Dangdut',
                'harga' => 3000000,

            ],
            [
                'jenis_acara' => 'Video Profil',
                'harga' => 3000000,

            ],
            [
                'jenis_acara' => 'Cinematic',
                'harga' => 3000000,

            ],
        ]);
    }
}
