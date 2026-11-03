<?php

namespace App\Providers;

use App\Models\Alumne;
use App\Models\Convidat;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Relation::enforceMorphMap([
            'alumne' => Alumne::class,
            'convidat' => Convidat::class,
        ]);
    }
}
