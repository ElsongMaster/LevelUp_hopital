<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypelocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typelocals')->insert([
            [
                "nom"=>"bureau"
            ],
            [
                "nom"=>"bloc"
            ],
        ]);
    }
}
