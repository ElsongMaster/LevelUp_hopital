<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([
            [
                "nom"=>"hopital Erasme",
                "adresse"=>"Route de Lennik 808
                1070 Bruxelles"
            ],
            [
                "nom"=>"Hopital Saint-Jean",
                "adresse"=>"Bd du Jardin Botanique 32, 1000 BruxellesD"
            ],
            [
                "nom"=>"hopital Joseph Bracops",
                "adresse"=>"Rue Dr Huet 79,
                1070 Bruxelles"
            ],
        ]);
    }
}
