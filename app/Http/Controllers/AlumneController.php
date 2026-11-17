<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumne;
class AlumneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $alumnes = Alumne::get();
        return view("admin.gestionar_alumnes", 
        [
            "alumnes" => $alumnes
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view("admin.import_alumnes");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
    public function estadistiques(){
        $alumnes = Alumne::get();
        return view("admin.consultar_estadistiques");
    }
}
