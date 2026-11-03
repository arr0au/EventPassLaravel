<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphMany;

    class Convidat extends Model
    {
        protected $table = "convidat";

        // Un convidat pertany a un alumne
        public function alumne(): BelongsTo
        {
            return $this->belongsTo(Alumne::class, 'alumne_id', 'id');
        }

        // Relació polimòrfica amb matriculacio (connectada per DNI_NIE)
        public function matriculacions(): MorphMany
        {
            return $this->morphMany(Matriculacio::class, 'persona', 'Tipus_Persona', 'persona_id', 'DNI_NIE');
        }
    }
