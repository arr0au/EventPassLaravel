<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Esdeveniment extends Model
{
    protected $table = "esdeveniment";

    protected $fillable = [
        'Nom',
        'Descripcio',
        'Ubicacio',
        'Data',
        'Hora_Inici',
        'Hora_Finalitzacio',
        'Puntuacio',
        'Estat'
    ];

    public function matriculacions(): HasMany
    {
        return $this->hasMany(Matriculacio::class, 'esdeveniment_id', 'id');
    }
}
