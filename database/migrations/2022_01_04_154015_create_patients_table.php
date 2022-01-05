<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('registre_national');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('genre');
            $table->string('adresse');
            $table->string('pays');
            $table->string('ville');
            $table->integer('code_postal');
            $table->string('num_gsm');
            $table->string('personne_contact');
            $table->string('num_personne_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
