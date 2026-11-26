<?php

namespace App\Http\Controllers;

use App\Models\Convidat;
use Illuminate\Http\Request;

class ConvidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $buscar = trim((string) $request->input('buscar'));
        // Carrega cada convidat juntament amb l'alumne que l'ha convidat
        $convidats = Convidat::with('alumne')
            ->when($buscar !== '', function ($query) use ($buscar) { // Si hi ha un terme de cerca, filtra els convidats per nom, cognom o DNI_NIE, o bé per l'alumne que els ha convidat
                $query->where(function ($q) use ($buscar) {
                    $q->where('Nom', 'like', "%{$buscar}%")
                      ->orWhere('Cognom', 'like', "%{$buscar}%")
                      ->orWhere('DNI_NIE', 'like', "%{$buscar}%")
                      ->orWhereHas('alumne', function ($qa) use ($buscar) {
                          $qa->where('Nom', 'like', "%{$buscar}%")
                             ->orWhere('Cognom', 'like', "%{$buscar}%")
                             ->orWhere('DNI_NIE', 'like', "%{$buscar}%");
                      });
                });
            })
            ->orderBy('id', 'desc')
            ->get();
        // Si l'usuari fa clic en una fila, la seleccionem; sinó, la primera de la llista
        $seleccionat = $request->filled('seleccionat')
            ? $convidats->firstWhere('id', (int) $request->input('seleccionat'))
            : $convidats->first(); // Si no hi ha cap convidat, $seleccionat serà null
        return view('admin.consultar_invitacions', compact('convidats', 'seleccionat', 'buscar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
