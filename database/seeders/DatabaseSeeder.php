<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '123',
            'role_id' => 1,
            'is_active' => 'Anggota',
            'status' => 3,
            'password' => Hash::make('123')
        ]);

        User::create([
            'nama' => 'ketua',
            'email' => 'ketua@gmail.com',
            'phone' => '123',
            'role_id' => 2,
            'is_active' => 'Anggota',
            'status' => 3,
            'password' => Hash::make('123')
        ]);

        User::create([
            'nama' => 'Nurlita',
            'alamat' => 'Kota Serang',
            'email' => 'nurlita@gmail.com',
            'phone' => '123',
            'role_id' => 6,
            'password' => Hash::make('123')
        ]);

        UserRole::create([
            'role' => 'Administrator'
        ]);

        UserRole::create([
            'role' => 'Ketua'
        ]);

        UserRole::create([
            'role' => 'Wakil Ketua'
        ]);

        UserRole::create([
            'role' => 'Sekertaris'
        ]);

        UserRole::create([
            'role' => 'Bendahara'
        ]);

        UserRole::create([
            'role' => 'Anggota'
        ]);
    }
}
