<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statutdossiermed extends Model
{
    use HasFactory;

    public function dossiermeds(){
        return $this->hasMany(Dossiermedical::class);
    }
}
