<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\User;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        $filieres = Filiere::all();
        return view('etudiants.index', compact(['etudiants','filieres']));
    }

    public function create()
    {
        $filieres = Filiere::all();
        $utilisateurs = User::all();

        return view('etudiants.create', compact(['filieres' , 'utilisateurs']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        Etudiant::create($request->all());

        return redirect()->route('etudiants.index')->with('success', 'Étudiant créé avec succès.');
    }

    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $filieres = Filiere::all();
        $utilisateurs = User::all();
        return view('etudiants.edit', compact('etudiant', 'filieres','utilisateurs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());

        return redirect()->route('etudiants.index')->with('success', 'Étudiant mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect()->route('etudiants.index')->with('success', 'Étudiant supprimé avec succès.');
    }
}
