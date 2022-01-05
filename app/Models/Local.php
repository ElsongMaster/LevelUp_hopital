<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;


    public function hopital(){
        return $this->belongsTo(Hopital::class);
    }
    public function typelocal(){
        return $this->belongsTo(Typelocal::class);
    }
}
