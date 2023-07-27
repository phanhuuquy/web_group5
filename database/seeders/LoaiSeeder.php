<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loais')->insert([
            'ten' => 'Thực phẩm',
        ]);

        DB::table('loais')->insert([
            'ten' => 'Gia dụng',
        ]);

        DB::table('loais')->insert([
            'ten' => 'Thời trang',
        ]);

        DB::table('loais')->insert([
            'ten' => 'Mỹ phẩm',
        ]);

    }
}
