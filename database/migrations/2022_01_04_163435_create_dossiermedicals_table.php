<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiermedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiermedicals', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('patient_id')->constrained('patients','id');
            $table->foreignId('maladie_id')->constrained('maladies','id');
            $table->foreignId('statutdossiermed_id')->constrained('statutdossiermeds','id');
            $table->integer('idConsultation');
            $table->string('diagnostique');
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
        Schema::dropIfExists('dossiermedicals');
    }
}
