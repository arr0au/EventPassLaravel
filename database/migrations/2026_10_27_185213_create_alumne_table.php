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
        Schema::create('alumne', function (Blueprint $table) {
            $table->id();
            $table -> string("DNI_NIE", 9);
            $table -> string("Contrasenya", 128);
            $table -> string("Nom", 32);
            $table -> string("Cognom", 32);
            $table -> string("Correu", 128);
            $table -> string("QR_Personal", 256);
            $table -> unsignedTinyInteger("Invitacions_Disponibles")->default(4); // Ocupa menys i inicia amb 4.
            $table -> integer("Puntuació");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumne');
    }
};
