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
        Schema::create('invitacio', function (Blueprint $table) {
            $table->id();
            $table->string("id_convidador", 9);
            $table->string("id_convidat", 9);
            $table->timestamps();

            $table->foreign("id_convidador")
                ->references("DNI_NIE")
                ->on("alumne")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign("id_convidat")
                ->references("DNI_NIE")
                ->on("convidat")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitacio');
    }
};
