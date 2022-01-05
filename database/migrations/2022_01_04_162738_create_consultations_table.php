<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_patient');
            $table->foreignId('statutconsultation_id')->constrained('statutconsultations','id');
            $table->foreignId('local_id')->constrained('locals','id');
            $table->foreignId('docteur_id')->constrained('docteurs','id');
            $table->dateTime('dateHeure');
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
        Schema::dropIfExists('consultations');
    }
}
