<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumne;
use App\Models\Convidat;
use App\Models\Esdeveniment;
use App\Models\Matriculacio;
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
        
    public function estadistiques(Request $request)
    {
        // Validació de l'entrada
        $validated = $request->validate([
            'esdeveniment_id' => 'nullable|integer|exists:esdeveniment,id',
        ]);

        $esdevenimentId = $validated['esdeveniment_id'] ?? null;

        // Actes per al selector d'àmbit
        $esdeveniments = Esdeveniment::orderBy('Data', 'desc')->get();

        // Estadístiques de persones i invitacions
        $totalAlumnes = Alumne::count();
        $totalConvidats = Convidat::count();
        $totalDirectori = $totalAlumnes + $totalConvidats;

        $invitacionsMaximes = $totalAlumnes * 4;
        $invitacionsDisponibles = (int) Alumne::sum('Invitacions_Disponibles');
        $invitacionsUtilitzades = max(0, $invitacionsMaximes - $invitacionsDisponibles);
        $percentatgeInvitacions = $invitacionsMaximes > 0
            ? round(($invitacionsUtilitzades / $invitacionsMaximes) * 100, 2)
            : 0; // Evitar divisió per zero i arrodoneix a 2 decimals ^

        // Registres de matriculació (tots o filtrats per acte)
        $registres = Matriculacio::query()
            ->when($esdevenimentId, fn ($query) => $query->where('esdeveniment_id', $esdevenimentId)) // Si s'ha seleccionat un acte, filtra per aquest acte, sinó tots
            ->get(['id', 'persona_id', 'esdeveniment_id', 'Punt_de_control']); //Mostrar només els camps necessaris per optimitzar la consulta

        $totalRegistres = $registres->count();
        $personesUniques = $registres->pluck('persona_id')->unique()->count();

        // Participacions per acte
        $participacionsPerActe = Esdeveniment::with('matriculacions:id,esdeveniment_id,persona_id') //Carrega només els camps necessaris per optimitzar la consulta
            ->when($esdevenimentId, fn ($query) => $query->where('id', $esdevenimentId))
            ->orderBy('Data', 'desc')
            ->get()
            ->map(fn (Esdeveniment $acte) => [ // Mapeig temporal per ordenar
                'nom' => $acte->Nom,
                'persones' => $acte->matriculacions->pluck('persona_id')->unique()->count(),
                'registres' => $acte->matriculacions->count(),
            ]);

        $maxParticipacio = max(1, (int) $participacionsPerActe->max('registres'));

        // 4. Registres per punt de control
        $registresPerPunt = $registres
            ->map(fn (Matriculacio $m) => $m->Punt_de_control ?: 'Sense punt de control')
            ->countBy()
            ->sortDesc();
        // Això converteix les variables en un array associatiu amb els noms de les variables com a claus que php pot utilitzar per passar-les a la vista
        return view('admin.consultar_estadistiques', compact(
            'esdeveniments',
            'esdevenimentId',
            'totalAlumnes',
            'totalConvidats',
            'totalDirectori',
            'invitacionsMaximes',
            'invitacionsDisponibles',
            'invitacionsUtilitzades',
            'percentatgeInvitacions',
            'totalRegistres',
            'personesUniques',
            'participacionsPerActe',
            'maxParticipacio',
            'registresPerPunt'
        ));
    }

    public function ranquing()
{
    $alumnes = Alumne::orderBy('Puntuacio', 'desc')->get();

    return view('admin.consultar_ranquing', [
        'alumnes' => $alumnes,
    ]);
}
}
