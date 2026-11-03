<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Escanejador extends Model
{
    protected $table = "escanejador"; 
    public function matriculacions(): HasMany
        {
            return $this->hasMany(Matriculacio::class, 'escanejador_id', 'id');
        }
}
