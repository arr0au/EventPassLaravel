<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin__menu');
})->name('admin.menu');

Route::get('/gestionar_alumnes', function () {
    return view('admin__gestionar_alumnes');
})->name('admin.gestionar_alumnes');

Route::get('/import_alumnes', function () {
    return view('admin__import_alumnes');
})->name('admin.import_alumnes');

Route::get('/gestionar_actes', function () {
    return view('admin__gestionar_actes');
})->name('admin.gestionar_actes');

Route::get('/consultar_invitacions', function () {
    return view('admin__consultar_invitacions');
})->name('admin.consultar_invitacions');

Route::get('/consultar_assistents', function () {
    return view('admin__consultar_assistents');
})->name('admin.consultar_assistents');

Route::get('/gestio_punts', function () {
    return view('admin__gestio_punts');
})->name('admin.gestio_punts');

Route::get('/consultar_registres', function () {
    return view('admin__consultar_registres');
})->name('admin.consultar_registres');

Route::get('/consultar_ranquing', function () {
    return view('admin__consultar_ranquing');
})->name('admin.consultar_ranquing');

Route::get('/configuracio', function () {
    return view('admin__configuracio');
})->name('admin.configuracio');

