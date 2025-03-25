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
        Schema::create('HorariosCentrosComputo', function (Blueprint $table) {
            $table->id('IdHorarioCentroComputo');
            $table->foreignId('IdCentroComputo')->references('IdCentroComputo')->on('CentrosComputo');
            $table->foreignId('IdHorarioDisponible')->references('IdHorarioDisponible')->on('Horarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HorariosCentrosComputo');
    }
};
