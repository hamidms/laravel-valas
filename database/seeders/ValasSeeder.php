<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Valas;

class ValasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus data yang ada sebelumnya dari tabel
        // Valas::truncate();

        // Menambahkan data dummy ke tabel valas
        Valas::create([
            'nama' => 'USD',
            'nilai_jual' => 14200,
            'nilai_beli' => 14100,
            'tanggal_rate' => now(),
        ]);

        Valas::create([
            'nama' => 'EUR',
            'nilai_jual' => 16800,
            'nilai_beli' => 16700,
            'tanggal_rate' => now(),
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
        // ...

        Valas::create([
            'nama' => 'JPY',
            'nilai_jual' => 130,
            'nilai_beli' => 128,
            'tanggal_rate' => now(),
        ]);
    }
}
