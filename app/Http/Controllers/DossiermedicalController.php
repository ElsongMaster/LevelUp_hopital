<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class DossiermedicalController extends Controller
{
    public function index($idPatient){
        $patient = Patient::find($idPatient);
        return view('front.dossiermedical.alldossiermedicalpatient',compact('patient'));
    }
}
