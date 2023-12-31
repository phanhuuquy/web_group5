<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PhanQuyenSeeder::class,
            TaiKhoanSeeder::class,
            LoaiSeeder::class,
            GianHangSeeder::class,
            SanPhamSeeder::class,
            KhuyenMaiSeeder::class,
            VanChuyenSeeder::class,
        ]);
    }
}
