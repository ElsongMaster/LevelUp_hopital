<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function docteur(){
        return $this->belongsTo(Docteur::class);
    }
    public function statutconsultaiton(){
        return $this->belongsTo(Statutconsultation::class);
    }

    // public function dossiermedical(){
    //     return $this->hasOne(Dossiermedical::class);
    // }

}
