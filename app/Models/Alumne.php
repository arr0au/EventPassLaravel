<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphMany;

    class Alumne extends Model
    {
        protected $table = "alumne";

        // Un alumne pot portar molts convidats
        public function convidats(): HasMany
        {
            return $this->hasMany(Convidat::class, 'alumne_id', 'id');
        }

        // Relació polimòrfica amb matriculacio (connectada per DNI_NIE)
        public function matriculacions(): MorphMany
        {
            return $this->morphMany(Matriculacio::class, 'persona', 'Tipus_Persona', 'persona_id', 'DNI_NIE');
        }
    }