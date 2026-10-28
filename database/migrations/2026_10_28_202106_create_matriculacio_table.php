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
        Schema::create('matriculacio', function (Blueprint $table) {
            $table->id();
            // Pot correspondre al DNI_NIE tant d'un Alumne com d'un Convidat
            $table->string("persona_id", 9)->index();
            $table->enum("Tipus_Persona", ["alumne", "convidat"]);

            $table->foreignId("esdeveniment_id")
                ->constrained("esdeveniment")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId("escanejador_id")
                ->nullable()
                ->constrained("escanejador")
                ->cascadeOnUpdate()
                ->nullOnDelete();
            
            $table->string("Punt_de_control", 64)->nullable();
            $table->date("Data")->nullable();
            $table->time("Hora")->nullable();
            $table->boolean("Validacio_correcta")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculacio');
    }
};
