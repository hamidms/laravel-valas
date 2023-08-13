<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Membership;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus data yang ada sebelumnya dari tabel
        // User::truncate();

        // Ambil ID membership yang akan dihubungkan dengan user
        $basicMembership = Membership::where('nama', 'Basic')->first();
        $silverMembership = Membership::where('nama', 'Silver')->first();
        // ...

        // Menambahkan data dummy ke tabel users
        User::create([
            'name' => 'John Doe',
            'username' => 'john.doe',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. ABC No. 123',
            'membership_id' => 3,
        ]);

        User::create([
            'name' => 'Jane Smith',
            'username' => 'jane.smith',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. XYZ No. 456',
            'membership_id' => 4,
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('adminpassword'),
            'alamat' => 'Jl. Admin No. 789',
            'membership_id' => 1,
        ]);
    }
}
