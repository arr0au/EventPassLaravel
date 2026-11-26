<?php

    use App\Http\Controllers\AdministradorController;
    use App\Http\Controllers\AlumneController;
    use App\Http\Controllers\ConvidatController;
    use App\Http\Controllers\EscanejadorController;
    use App\Http\Controllers\EsdevenimentController;
    use App\Http\Controllers\MatriculacioController;
    use Illuminate\Support\Facades\Route;
    Route::name('admin.')->group(function () {
        Route::view('/', 'admin.menu')->name('menu');
        Route::view('/gestionar_alumnes', 'admin.gestionar_alumnes')->name('gestionar_alumnes');
        Route::match(['get', 'post'], '/import_alumnes', fn () => view('admin.import_alumnes'))->name('import_alumnes');
        Route::view('/gestionar_actes', 'admin.gestionar_actes')->name('gestionar_actes');
        Route::get('/consultar_assistents', [MatriculacioController::class, 'assistents'])->name('consultar_assistents');
        Route::view('/gestio_punts', 'admin.gestio_punts')->name('gestio_punts');
        Route::view('/consultar_registres', 'admin.consultar_registres')->name('consultar_registres');
        Route::view('/consultar_ranquing', 'admin.consultar_ranquing')->name('consultar_ranquing');
        Route::get('/consultar_ranquing', [AlumneController::class, 'ranquing'])->name('consultar_ranquing');
        Route::view('/configuracio', 'admin.configuracio')->name('configuracio');
        Route::get('/consultar_estadistiques', [AlumneController::class, 'estadistiques'])->name('consultar_estadistiques');
    });

    Route::resources([
        'alumne' => AlumneController::class,
        'administrador' => AdministradorController::class,
        'convidat' => ConvidatController::class,
        'escanejador' => EscanejadorController::class,
        'esdeveniment' => EsdevenimentController::class,
        'matriculacio' => MatriculacioController::class,
    ]);