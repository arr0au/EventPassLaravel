<?php

namespace App\Http\Controllers;

use App\Models\Esdeveniment;
use Illuminate\Http\Request;

class EsdevenimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esdeveniments = Esdeveniment::get();
        return view('admin.gestionar_actes',
        [
            'esdeveniments' => $esdeveniments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alta_acte');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Esdeveniment::create([
            'Nom' => $request->input('nom'),
            'Descripcio' => $request->input('descripcio'),
            'Ubicacio' => $request->input('ubicacio'),
            'Data' => $request->input('data'),
            'Hora_Inici' => $request->input('hora_inici'),
            'Hora_Finalitzacio' => $request->input('hora_finalitzacio'),
            'Puntuacio' => $request->input('puntuacio'),
            'Estat' => $request->boolean('estat')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $esdeveniment = Esdeveniment::find($id);
        return view('admin.edit_acte', compact('esdeveniment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                Esdeveniment::edit([
            'Nom' => $request->input('nom'),
            'Descripcio' => $request->input('descripcio'),
            'Ubicacio' => $request->input('ubicacio'),
            'Data' => $request->input('data'),
            'Hora_Inici' => $request->input('hora_inici'),
            'Hora_Finalitzacio' => $request->input('hora_finalitzacio'),
            'Puntuacio' => $request->input('puntuacio'),
            'Estat' => $request->boolean('estat')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esdeveniment $esdeveniment)
            {
        $esdeveniment->delete();

        return redirect()->back()->with('success', 'Alumno eliminado correctamente');
        }
}
