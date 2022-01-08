<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::paginate(10);
        return view('front.pages.patients',compact('patients'));
    }
}
