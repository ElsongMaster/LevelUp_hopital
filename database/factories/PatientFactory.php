<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "registre_national" => $this->faker->numerify('###-###-####'),
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "date_naissance" => $this->faker->date($format = 'Y-m-d', $max = '2010-01-01'),
            "genre" => $this->faker->randomElement($array = array('F', 'M')),
            "adresse" => $this->faker->address,
            "pays" => $this->faker->country,
            "ville" => $this->faker->city,
            "code_postal" => intval($this->faker->postcode),
            "num_gsm" => $this->faker->phoneNumber,
            "personne_contact" => $this->faker->name,
            "num_personne_contact" => $this->faker->phoneNumber,

        ];
    }
}
