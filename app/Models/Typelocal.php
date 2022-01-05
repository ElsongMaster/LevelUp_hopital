<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typelocal extends Model
{
    use HasFactory;


    public function local(){
        return $this->hasOne(Local::class);
    }
}
