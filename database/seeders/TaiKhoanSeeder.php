<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;


class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Admin',
            'email' => 'admin@gmail.com',
            'sdt' => '0123456789',
            'Ten_dang_nhap' => 'admin',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '1',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Duong Van Khai',
            'email' => 'khai@gmail.com',
            'sdt' => '0123456788',
            'Ten_dang_nhap' => 'bang',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Duong Van Khai 2',
            'email' => 'khai2@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'khai2',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Tu',
            'email' => 'tu@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'tu',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Tuan',
            'email' => 'tuan@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'tuan',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '3',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Tuan',
            'email' => 'kien@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'kien',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '3',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Tuan',
            'email' => 'huan@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'huan',
            'password' => Hash::make('1'),
            'id_phan_quyen' => '3',
        ]);
    }
}

