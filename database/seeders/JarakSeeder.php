<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JarakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_jarak')->insert([
            'id'=>1,
            'id_kecamatan_a'=>1,
            'id_kecamatan_b'=>1,
            'jarak'=>'223',
            'created_at'=>'2022-07-10 09:06:08',
            'updated_at'=>'2022-07-10 09:06:08',
            'deleted_at'=>NULL
            ]);

    }
}