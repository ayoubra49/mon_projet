<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();

        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function create()
    {
        return view('utilisateurs.create');
    }

    public function store(Request $request)
    {
        Utilisateur::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'mot_de_passe' => bcrypt($request->input('mot_de_passe')),
        ]);

        return redirect()->route('utilisateurs.index');
    }
    
    public function show($id)
    {
    // Récupérer l'utilisateur en fonction de son ID depuis la base de données
    $utilisateur = DB::table('utilisateurs')->where('id', $id)->first();

    // Afficher la vue "show" avec les données de l'utilisateur
    return view('utilisateurs.show', ['utilisateur' => $utilisateur]);
    }
    
    public function edit($id)
    {
    // Récupérer l'utilisateur avec l'ID spécifié depuis la base de données
    $user = Utilisateur::find($id);

    // Vérifier si l'utilisateur existe
    if (!$user) {
        return redirect()->route('utilisateurs.index')->with('error', 'Utilisateur non trouvé.');
    }

    // Charger la vue pour l'édition de l'utilisateur
    return view('utilisateurs.edit', ['user' => $user]);
    }
    
    public function destroy(Utilisateur $utilisateur)
    {
    $utilisateur->delete();

    return redirect()->route('utilisateurs.index')
                     ->with('success', 'Utilisateur supprimé avec succès.');
    }



}
