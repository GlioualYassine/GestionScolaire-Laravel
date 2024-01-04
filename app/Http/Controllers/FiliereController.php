<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        return view('filieres.index', compact('filieres'));
    }

    public function create()
    {
        return view('filieres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Filiere::create($request->all());

        return redirect()->route('filieres.index')->with('success', 'Filière créée avec succès.');
    }

    public function show($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.show', compact('filiere'));
    }

    public function edit($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.edit', compact('filiere'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $filiere = Filiere::findOrFail($id);
        $filiere->update($request->all());

        return redirect()->route('filieres.index')->with('success', 'Filière mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $filiere = Filiere::findOrFail($id);
        $filiere->delete();

        return redirect()->route('filieres.index')->with('success', 'Filière supprimée avec succès.');
    }
}
