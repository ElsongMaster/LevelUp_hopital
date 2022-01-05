<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutconsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statutconsultations')->insert([

            [
                "nom"=>"planifié"
            ],
            [
                "nom"=>"annulé"
            ],
            [
                "nom"=>"raté"
            ],
            [
                "nom"=>"fait"
            ],

        ]);
    }
}
