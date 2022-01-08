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
                "nom" => "Appendicite",
                "curable" => true,
                "traitement" => "L'intervention chirurgicale (ablation)"
            ],
            [
                "nom" => "Eczéma ",
                "curable" => true,
                "traitement" => "une pommade ou une crème hydratante,tablettes comme des anti-inflammatoires  "
            ],
            [
                "nom" => "Cholestérol",
                "curable" => true,
                "traitement" => "alimentation saine, pauvre en matières grasses ou médicament dit anticholestérolémiant"
            ],
            [
                "nom" => "Asthme",
                "curable" => false,
                "traitement" => "bronchodilatateur d'action rapide"
            ],
            [
                "nom" => "Alzheimer",
                "curable" => false,
                "traitement" => "traitement expérimentaux"
            ],
            [
                "nom" => "Diabète ",
                "curable" => false,
                "traitement" => "Une alimentation équilibrée,Des exercices physiques en suffisance,Garder un poids stable +piqûres d'insuline"
            ],
            [
                "nom" => "entorse ",
                "curable" => true,
                "traitement" => "prise d'analgésiques, immobilisé le membre, rééduquer les réflexes proprioceptifs "
            ],
            [
                "nom" => "Coup de soleil ",
                "curable" => true,
                "traitement" => "application d'une protection solaire à indice de protection élevé  "
            ],
            [
                "nom" => "Hypersomnie ",
                "curable" => true,
                "traitement" => "tenue d'un journal du sommeil, avoir une bonne hygiène de sommeil "
            ],
            [
                "nom" => "Infection par le VIH ",
                "curable" => false,
                "traitement" => "prise d’antiviraux "
            ],
            [
                "nom" => "Ostéoporose",
                "curable" => false,
                "traitement" => "Activité physique régulière,Une alimentation suffisamment riche en calcium, prise de vitamine D  "
            ],
            [
                "nom" => "Mononucléose",
                "curable" => false,
                "traitement" => "médicament pour soulager les symptômes, pas de médicaments spécifiques pour éradiquer le virus  "
            ],
            [
                "nom" => "Varicelle",
                "curable" => true,
                "traitement" => " Ne rien faire et attendre que l'organisme combattent le virus, conseils pour mieux gérer la maladie  "
            ],
            [
                "nom" => "Hépatites A",
                "curable" => true,
                "traitement" => " pas de traitement, guèri spontanémant  "
            ],
            [
                "nom" => "Hépatites C",
                "curable" => true,
                "traitement" => " Les thérapies modernes sous forme de pilules  "
            ],
            [
                "nom" => "Hépatites B",
                "curable" => true,
                "traitement" => " vaccination pour éviter la récidive  "
            ],
            [
                "nom" => "Bouton de fièvre (herpès) ",
                "curable" => true,
                "traitement" => " disparaissent spontanément "
            ],
            [
                "nom" => "Conjonctivite et autres infections des yeux ",
                "curable" => true,
                "traitement" => " disparait spontanément, si forme bactèrienne (prise de gouttes antibiotique) "
            ],
            [
                "nom" => "Hyperventilation ",
                "curable" => true,
                "traitement" => "  respirer plus calmement, essayer de maîtriser sa respiraiton "
            ],
            [
                "nom" => "Cancer de la peau (ou mélanome) forme bégnine  ",
                "curable" => true,
                "traitement" => " Si dépister à temps il peut être enlever via une opération chirurgicale "
            ],
            [
                "nom" => "Cancer de la peau (ou mélanome) forme grave ",
                "curable" => false,
                "traitement" => " séance de chimio pour diminuer la propagation des celulles cancéreuses "
            ],
            [
                "nom" => "Parkinson",
                "curable" => false,
                "traitement" => " médicaments pour pallier le manque de dopamine, traitement chirurgical pour une stimulation cérébrale, réeducation physique et orthophonique "
            ],
            [
                "nom" => "sclérose en plaques",
                "curable" => false,
                "traitement" => " prise de corticoïdes, prise  d'immunomodulateurs  et d'immunosuppresseurs "
            ],
            [
                "nom" => "maladie de Crohn",
                "curable" => false,
                "traitement" => " médicament destinés à diminuer l'activité du système immunitaire (anti-inflammatoires et immunosuppresseurs) "
            ],
            [
                "nom" => "Cor au pied ",
                "curable" => true,
                "traitement" => "Porter des chaussures adaptées, pansement anti-cors, port de semelle orthopédique "
            ],
            [
                "nom" => "Gale ",
                "curable" => true,
                "traitement" => "Application d'une crème à base de perméthrine "
            ],
            [
                "nom" => "Angine de poitrine ",
                "curable" => true,
                "traitement" => " Prise de  médicaments qui diminuent la consommation du muscle cardiaque, aspirine, médicaments hypocholestérolémiants (statines)"
            ],
            [
                "nom" => "Intoxication alimentaire ",
                "curable" => true,
                "traitement" => " disparait tout seul, boire suffisamment d'eau, manger en petite proportions"
            ],
            [
                "nom" => "Rhinopharyngite ",
                "curable" => true,
                "traitement" => "Les gouttes et médicaments décongestionnants et d'antibiotiques"
            ],
            [
                "nom" => "Calculs biliaires ",
                "curable" => true,
                "traitement" => "les calculs qui ne causent pas de douleur ne doivent pas être taités, solutions chirurgicales pour ceux qui sont trop douleureux (colonoscopie,laparoscopie)"
            ],
        ]);
    }
}
