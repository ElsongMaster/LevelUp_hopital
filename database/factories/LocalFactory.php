<?php

namespace Database\Factories;

use App\Models\Hopital;
use App\Models\Local;
use App\Models\Typelocal;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    protected $i=1;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nbArray = array (1,2,3);
        $nbRand = $this->faker->randomElement($nbArray);
        $nbElemHopital = Local::where('hopital_id','=',$nbRand)->get()->count();
        if($nbElemHopital == 80){
            array_slice($nbArray,$nbRand-1);
            $nbRand = $this->faker->randomElement($nbArray);
        }
        // $nblocal = strval($this->i++);
        // $nomLocal  =`local$nblocal`;
        return [
            "nom"=>"local".$this->i++,
            "hopital_id"=>$nbRand,
            "typelocal_id"=>$this->faker->numberBetween(1,Typelocal::all()->count()),
            "libre"=>true
        ];
    }
}
