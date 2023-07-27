<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GianHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gian_hangs')->insert([
            'ten_gianhang' => 'Shop Giày',
            'status' => 1,
            'id_user' => 2,
            'id_loai' => 1,
            'dia_chi' => 'Ha Noi',
            'van_chuyen' => 1,
        ]);

        DB::table('gian_hangs')->insert([
            'ten_gianhang' => 'Shop Túi',
            'status' => 1,
            'id_user' => 3,
            'id_loai' => 2, 'dia_chi' => 'Ha Noi',
            'van_chuyen' => 3,
        ]);

        DB::table('gian_hangs')->insert([
            'ten_gianhang' => 'Shop Quần',
            'status' => 1,
            'id_user' => 4, 'dia_chi' => 'Ha Noi',
            'van_chuyen' => 2,
            'id_loai' => 3,
        ]);
    }
}
