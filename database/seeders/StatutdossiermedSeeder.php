<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutdossiermedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statutdossiermeds')->insert([
            [
                "nom"=>"diagnositqué"
            ],
            [
                "nom"=>"guéri"
            ],
            [
                "nom"=>"incurable"
            ],
        ]);
    }
}
