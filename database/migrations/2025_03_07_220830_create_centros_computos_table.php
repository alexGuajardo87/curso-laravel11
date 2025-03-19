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
        Schema::create('CentrosComputo', function (Blueprint $table) {
            $table->id('IdCentroComputo');
            $table->string('Nombre',50);
            $table->smallInteger('TotalEquipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CentrosComputo');
    }
};
