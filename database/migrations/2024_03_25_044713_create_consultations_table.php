<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string("situation")->nullable();
            $table->text("antécédents")->nullable();
            $table->float("motif")->nullable();
            $table->text("examen_clinick")->nullable();
            $table->text("examen_biologique")->nullable();
            $table->text("examen_radiologique")->nullable();
            $table->string("diagnostique")->nullable();
            $table->text("traitment")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
