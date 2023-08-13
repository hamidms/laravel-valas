<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus data yang ada sebelumnya dari tabel
        // Membership::truncate();

        Membership::create([
            'nama' => 'Admin',
            'discount' => 0,
            'minimum_profit' => 0,
        ]);

        Membership::create([
            'nama' => 'Superadmin',
            'discount' => 0,
            'minimum_profit' => 0,
        ]);

        Membership::create([
            'nama' => 'Basic',
            'discount' => 5,
            'minimum_profit' => 1000,
        ]);

        Membership::create([
            'nama' => 'Silver',
            'discount' => 10,
            'minimum_profit' => 2000,
        ]);

        Membership::create([
            'nama' => 'Gold',
            'discount' => 15,
            'minimum_profit' => 3000,
        ]);
    }
}
