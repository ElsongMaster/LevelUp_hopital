<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocteurFactory extends Factory
{
    /**
     * Define the model's default state",
     *
     * @return array
     */
    public function definition()
    {
        $tab = array(
            "L’allergologie ou l’immunologie",
            "L’anesthésiologie",
            " L’andrologie",
            "La cardiologie",
            "La chirurgie",
            "La chirurgie cardiaque",
            "La chirurgie esthétique, plastique et reconstructive",
            "La chirurgie générale",
            "La chirurgie maxillo-faciale",
            "La chirurgie pédiatrique",
            "La chirurgie thoracique",
            "La chirurgie vasculaire",
            "La neurochirurgie",
            "La dermatologie",
            "L’endocrinologie",
            "La gastro-entérologie",
            " La gériatrie",
            "La gynécologie",
            "L’hématologie",
            "L’hépatologie",
            "L’infectiologie",
            "La médecine aiguë",
            " La médecine du travail",
            "La médecine générale",
            " La médecine interne",
            " La médecine nucléaire",
            "La médecine palliative",
            "La médecine physique",
            "La médecine préventive",
            " La néonatologie",
            "La néphrologie",
            " La neurologie",
            "L’odontologie",
            " L’oncologie",
            "L’obstétrique",
            "L’ophtalmologie",
            "L’orthopédie",
            " L’Oto-rhino-laryngologie",
            "La pédiatrie",
            "La pneumologie",
            "La psychiatrie",
            " La radiologie",
            "La radiothérapie",
            "La rhumatologie",
            "L’urologie"
        );
        // $nom = $this->faker->name;
        // $nomDocteur = `Dr. $nomDocteur `;
        return [
            "nom" => "Dr. ". $this->faker->name,
            "anneesexperience" => $this->faker->numberBetween(3, 20),
            "specialisation" => $this->faker->randomElement($tab),
        ];
    }
}
