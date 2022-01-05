<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Maladie;
use App\Models\Statutdossiermed;
use Illuminate\Database\Eloquent\Factories\Factory;

class DossiermedicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $i=0;

        return [
            "patient_id"=>$i++,
            "maladie_id"=>$this->faker->numberBetween(1,Maladie::all()->count()),
            "statutdossiermed_id"=>$this->faker->numberBetween(1,Statutdossiermed::all()->count()),
            "id_consultationDiagnostique"=>$this->faker->numberBetween(1,Consultation::all()->count()),
            "diagnostique"=>$this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
