<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'role_id' => '1',
            'name' => 'Sri Noviana Mukti',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'id' => '2',
            'role_id' => '2',
            'name' => 'Yudistira Ramadan Kalimasada',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'id' => '3',
            'role_id' => '3',
            'name' => 'Olifia',
            'email' => 'bendahara@gmail.com',
            'password' => Hash::make('tes'),
        ]);
    }
}
