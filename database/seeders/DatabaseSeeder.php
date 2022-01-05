<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            HopitalSeeder::class,
            TypelocalSeeder::class,
            StatutconsultationSeeder::class,
            MaladieSeeder::class,
            StatutdossiermedSeeder::class,


        ]);

        \App\Models\Local::factory(150)->create();
        \App\Models\Patient::factory(200)->create();
        \App\Models\Docteur::factory(50)->create();
        \App\Models\Consultation::factory(2000)->create();
    }
}
