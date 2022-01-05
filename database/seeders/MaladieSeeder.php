<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaladieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maladies')->insert([
            [
                "nom"=>"Appendicite",
                "curable"=>true,
                "traitement"=>"L'intervention chirurgicale (ablation)"
            ],
            [
                "nom"=>"Eczéma ",
                "curable"=>true,
                "traitement"=>"une pommade ou une crème hydratante,tablettes comme des anti-inflammatoires  "
            ],
            [
                "nom"=>"Cholestérol",
                "curable"=>true,
                "traitement"=>"alimentation saine, pauvre en matières grasses ou médicament dit anticholestérolémiant"
            ],
            [
                "nom"=>"Asthme",
                "curable"=>false,
                "traitement"=>"bronchodilatateur d'action rapide"
            ],
            [
                "nom"=>"Alzheimer",
                "curable"=>false,
                "traitement"=>"traitement expérimentaux"
            ],
            [
                "nom"=>"Diabète ",
                "curable"=>false,
                "traitement"=>"Une alimentation équilibrée,Des exercices physiques en suffisance,Garder un poids stable +piqûres d'insuline"
            ],
        ]);
    }
}
