<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use Illuminate\Http\Request;

class HopitalController extends Controller
{
    public function index(){
        $hopitals = Hopital::all();
        return view('front.pages.hopitaux',compact('hopitals'));
    }
}
