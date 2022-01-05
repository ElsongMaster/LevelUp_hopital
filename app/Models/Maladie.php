<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;

    public function dossiermedicals(){
        return $this->belongsToMany(Dossiermedical::class,'dossiermedical_maladies','maladie_id','dossiermedical_id');
    }
}
