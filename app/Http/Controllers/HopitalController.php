<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Dossiermedical;
use App\Models\Hopital;
use App\Models\Local;
use App\Models\Patient;
use App\Models\Statutconsultation;
use Illuminate\Http\Request;

class HopitalController extends Controller
{
    public function index()
    {
        $hopitals = Hopital::all();
        return view('front.pages.hopitaux', compact('hopitals'));
    }
    public function show(Hopital $hopital)
    {
        // $consultations = [];
        $docteurs = [];
        $locaux = [];
        $patients = [];
        $statutconsultations = [];
        $tabTempDocteur = [];

        $consultations = Consultation::join("locals", "locals.id", "=", "consultations.local_id")->where("locals.hopital_id", "=", $hopital->id)->orderBy('dateHeure', 'asc')->paginate(15);
        // $tmp = Dossiermedical::where("statutdossiermed_id", "=", 1)->join("consultations", "consultations.id", "=", "dossiermedicals.idConsultation")->join("locals", "locals.id", "=", "consultations.local_id")->get();
        $dossiermedicalsDiagnostique = Dossiermedical::where("statutdossiermed_id", "=", 1)->join("consultations", "consultations.id", "=", "dossiermedicals.idConsultation")->join("locals", "locals.id", "=", "consultations.local_id")->where("locals.hopital_id", "=", $hopital->id)->get();

        $tabIdConsultationWithDossiermedical = [];
        $tabTemp = Consultation::join("locals", "locals.id", "=", "consultations.local_id")->where("locals.hopital_id", "=", $hopital->id)->orderBy('dateHeure', 'asc')->get();

        $locauxHopital = Local::where('hopital_id', '=', $hopital->id)->get();


        foreach ($dossiermedicalsDiagnostique as $dossiermedical) {
            array_push($tabIdConsultationWithDossiermedical, $dossiermedical->idConsultation);
        }




        foreach ($tabTemp as $consult) {


            // array_push($consultations, $consult);

            array_push($docteurs, Docteur::find($consult->docteur_id));

            array_push($patients, Patient::find($consult->id_patient));

            array_push($locaux, Local::find($consult->local_id));

            array_push($statutconsultations, Statutconsultation::find($consult->statutconsultation_id));
            // }
        }
        // dd($tabIdConsultationWithDossiermedical);

        // dd($tmp[0]->diagnostique);

        return view('front.hopital.hopitaldetail', compact('hopital', 'consultations', 'patients', 'docteurs', 'locaux', 'statutconsultations', 'tabIdConsultationWithDossiermedical'));
    }
}
