<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossiermedical extends Model
{
    use HasFactory;


    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function statutdossiermed(){
        return $this->belongsTo(Statutdossiermed::class);
        
    }


    // public function consultation(){
    //     return $this->belongsTo(Consultation::class);
    // }

    public function maladie(){
        return $this->belongsTo(Maladie::class);
    }
}
