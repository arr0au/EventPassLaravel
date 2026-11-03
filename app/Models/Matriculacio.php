<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Matriculacio extends Model
{
    protected $table = "matriculacio";

    // Retorna l'Alumne o el Convidat segons Tipus_Persona (connectat per DNI_NIE)
    // Ja que es relació polimorfica
    public function persona(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'Tipus_Persona', 'persona_id', 'DNI_NIE');
    }

    // Pertany a un esdeveniment
    public function esdeveniment(): BelongsTo
    {
        return $this->belongsTo(Esdeveniment::class, 'esdeveniment_id', 'id');
    }

    // Pertany a un escanejador
    public function escanejador(): BelongsTo
    {
        return $this->belongsTo(Escanejador::class, 'escanejador_id', 'id');
    }
}
