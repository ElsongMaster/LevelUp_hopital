<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statutconsultation extends Model
{
    use HasFactory;

    public function consultation(){
        return $this->hasOne(Consultation::class);
    }
}
