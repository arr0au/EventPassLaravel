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
        Schema::create('esdeveniment', function (Blueprint $table) {
            $table->id();
            $table->string("Nom", 64);
            $table->text("Descripcio")->nullable();
            $table->string("Ubicacio", 128);
            $table->date("Data");
            $table->time("Hora_Inici");
            $table->time("Hora_Finalitzacio");
            $table->integer("Puntuacio")->default(0);
            $table->boolean("Estat")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esdeveniment');
    }
};
