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
        Schema::create('Horarios', function (Blueprint $table) {
            $table->id('IdHorarioDisponible');
            $table->time('HoraInicial', precision: 0);
            $table->time('HoraFinal', precision: 0);
            $table->boolean('EstaDisponible')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Horarios');
    }
};
