<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumne;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AlumneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnes = Alumne::get();
        return view(
            "admin.gestionar_alumnes",
            [
                "alumnes" => $alumnes
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.crear_alumnes");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'DNI_NIE' => 'required|string|size:9|unique:alumne,DNI_NIE',
            'Nom' => 'required|string|max:32',
            'Cognom' => 'required|string|max:32',
            'Correu' => 'required|email|max:128',
            'Contrasenya' => 'required|string|max:128',
            'Invitacions_Disponibles' => 'nullable|integer|min:0|max:4',
            'Puntuacio' => 'nullable|integer',
        ]);

        $alumne = new Alumne();
        $alumne->DNI_NIE = $request->DNI_NIE;
        $alumne->Nom = $request->Nom;
        $alumne->Cognom = $request->Cognom;
        $alumne->Correu = $request->Correu;
        $alumne->Contrasenya = Hash::make($request->Contrasenya);
        $alumne->QR_Personal = (string) Str::uuid();
        $alumne->Invitacions_Disponibles = $request->input('Invitacions_Disponibles', 4);
        $alumne->Puntuacio = $request->input('Puntuacio', 0);
        $alumne->GrupClasse = $request->input('GrupClasse', 'Sense grup');
        $alumne->save();

        return redirect()->route('alumne.index');
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
    public function edit(Request $request, string $id)
    {
        $alumne = Alumne::findOrFail($id);
        return view('admin.edit_alumne', compact('alumne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumne = Alumne::findOrFail($id);
        $alumne->update([
            'DNI_NIE' => $request->DNI_NIE,
            'Nom' => $request->Nom,
            'Cognom' => $request->Cognom,
            'Correu' => $request->Correu,
            'Contrasenya' => Hash::make($request->Contrasenya),
            'QR_Personal' => (string) Str::uuid(),
            'Invitacions_Disponibles' => $request->input('Invitacions_Disponibles', 4),
            'Puntuacio' => $request->input('Puntuacio', 0),
            'GrupClasse' => $request->input('GrupClasse', 'Sense grup')
        ]);

        return redirect()->route('alumne.index')->with('success', 'Alumne actualitzat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumne $alumne)
    {
        $alumne->delete();

        return redirect()->back()->with('success', 'Alumno eliminado correctamente');
    }
    public function estadistiques()
    {
        $alumnes = Alumne::get();
        return view("admin.consultar_estadistiques");
    }
}
