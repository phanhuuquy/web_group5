<?php

namespace Database\Seeders;

use App\Models\VanChuyen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;


class VanChuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        VanChuyen::insert([
            [
                'name' => 'Giao hàng tiết kiệm'
            ],
            [
                'name' => 'Shoppe Express'
            ],
            [
                'name' => 'Ninja Vans'
            ],
        ]);
    }
}

