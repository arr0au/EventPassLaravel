<?php

namespace App\Http\Controllers;

use App\Models\Esdeveniment;
use App\Models\Matriculacio;
use Illuminate\Http\Request;

class MatriculacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function assistents(Request $request) {
        // Validem els paràmetres de la consulta
        $validated = $request->validate([
            'esdeveniment_id' => 'nullable|integer|exists:esdeveniment,id',
            'tipus' => 'nullable|in:tots,alumne,convidat',
        ]);
        // Obtenim tots els esdeveniments ordenats per data descendent
        $esdeveniments = Esdeveniment::orderBy('Data', 'desc')->get();
        $esdevenimentId = $validated['esdeveniment_id'] ?? $esdeveniments->first()?->id;
        $tipus = $validated['tipus'] ?? 'tots';
        // Obtenim l'esdeveniment seleccionat o tots
        $esdevenimentSeleccionat = $esdeveniments->firstWhere('id', (int) $esdevenimentId);

        // Carreguem totes les matriculacions de l'acte amb la persona (Alumne o Convidat)
        $totsRegistres = Matriculacio::with(['persona', 'esdeveniment'])
            ->when($esdevenimentSeleccionat, fn ($q) => $q->where('esdeveniment_id', $esdevenimentSeleccionat->id))
            ->orderBy('Data', 'desc')
            ->orderBy('Hora', 'desc')
            ->get();

        $totalRegistres = $totsRegistres->count(); // Total registres (no distingueix entre alumnes i convidats)

        // Agrupem per DNI_NIE (persona_id) perquè cada persona surti un sol cop a la llista
        $agrupats = $totsRegistres->groupBy('persona_id');

        // Tipus de persones:
        $totalPersonesUniques = $agrupats->count(); 
        $totalAlumnes = $agrupats->filter(fn ($g) => $g->first()->Tipus_Persona === 'alumne')->count();
        $totalConvidats = $agrupats->filter(fn ($g) => $g->first()->Tipus_Persona === 'convidat')->count();

        // Apliquem el filtre (Tothom / Alumnes / Convidats)
        $assistents = $agrupats
            ->when($tipus !== 'tots', fn ($col) => $col->filter(fn ($g) => $g->first()->Tipus_Persona === $tipus))
            ->map(fn ($registresPersona) => [
                'ultim' => $registresPersona->first(),
                'registres' => $registresPersona,
                'persona' => $registresPersona->first()->persona,
            ]);

        // Persona seleccionada per mostrar a la fitxa de detall
        $personaSeleccionadaId = $request->input('persona_id', $assistents->keys()->first());
        $assistentSeleccionat = $assistents->get($personaSeleccionadaId) ?? $assistents->first();

        // Retornem la vista amb les dades necessàries per la vista 
        return view('admin.consultar_assistents', compact(
            'esdeveniments',
            'esdevenimentSeleccionat',
            'tipus',
            'assistents',
            'assistentSeleccionat',
            'totalPersonesUniques',
            'totalRegistres',
            'totalAlumnes',
            'totalConvidats'
        ));
    }

}
