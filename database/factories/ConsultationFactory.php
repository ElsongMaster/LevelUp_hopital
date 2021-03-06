<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Dossiermedical;
use App\Models\Local;
use App\Models\Maladie;
use App\Models\Patient;
use App\Models\Statutdossiermed;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    protected $cptDossierMaladie = 1;
    protected $idPatient = 1;
    protected $cptConsultation = 1;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tabStatut = array(4, 4, 4, 1, 2, 3);

        if ($this->idPatient == 200) {
            $this->idPatient = 1;
        }
        if ($this->cptDossierMaladie <= 800) {
            $newDossiermedical = new Dossiermedical;
            $newDossiermedical->patient_id = $this->idPatient;
            $idMaladie = $this->faker->numberBetween(1, Maladie::all()->count());
            //recup maladies du patient
            $tabMaladie = [];
            foreach (Patient::find($this->idPatient)->dossiermedicals() as $dossiermedical) {
                array_push($tabMaladie, $dossiermedical->maladie_id);
            }

            while (in_array($idMaladie, $tabMaladie)) {
                $idMaladie = $this->faker->numberBetween(1, Maladie::all()->count());
            }
            $newDossiermedical->maladie_id = $idMaladie;

            if (!Maladie::find($idMaladie)->curable) {

                $newDossiermedical->statutdossiermed_id = 3;
            } else {
                $newDossiermedical->statutdossiermed_id = $this->faker->numberBetween(1, 2);
            }
            $newDossiermedical->idConsultation =  $this->cptConsultation;
            $newDossiermedical->diagnostique =  Maladie::find($idMaladie)->nom;

            $newDossiermedical->save();
            $this->cptDossierMaladie++;
            $this->cptConsultation++;
        }



        return [
            "id_patient" => $this->idPatient++,
            "statutconsultation_id" => $this->faker->randomElement($tabStatut),
            "local_id" => $this->faker->numberBetween(1, Local::all()->count()),
            "docteur_id" => $this->faker->numberBetween(1, Docteur::all()->count()),
            "dateHeure" => $this->faker->dateTimeBetween($startDate = '-7 months', $endDate = '+24 days', $timezone = 'Europe/Paris')

        ];
    }
}
