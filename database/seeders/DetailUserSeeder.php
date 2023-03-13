<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailUser::create ([
            'id' => '1',
            'user_id' => '1',
            'photo' => 'admin.png',
            'address' => 'Jln Trenggiling Timur Kuripan',
            'phone' => '085652145896',
            'gender' => 'Perempuan'
        ]);
        DetailUser::create ([
            'id' => '2',
            'user_id' => '2',
            'photo' => 'petugas.png',
            'address' => 'Jln Sulawesi Cilacap Tengah',
            'phone' => '085228409840',
            'gender' => 'Laki-laki'
        ]);
        DetailUser::create ([
            'id' => '3',
            'user_id' => '3',
            'photo' => 'bendahara.png',
            'address' => 'Jln Kuda Laut Tritih Jeruklegi',
            'phone' => '085652325698',
            'gender' => 'Perempuan'
        ]);
    }
}
