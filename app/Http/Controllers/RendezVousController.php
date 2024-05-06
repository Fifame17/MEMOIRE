<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class RendezVousController extends Controller
{
    public function afficherPagePriserdv()
    {
        // Récupérer les services depuis la base de données
        $services = Service::all();

        // Retourner la vue en passant les données récupérées
        return view("priserdv", compact("services"));
    }

    public function store(Request $request)
    {
        // 1. Validation
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'required|string|max:255',
        ]);

        // 2. On enregistre les informations du RendezVous
        RendezVousController::afficherPagePriserdv([
            'title' => $request->title,
            'content' => $request->content,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' => $request->adresse,
        ]);

        // 3. On redirige vers tous les RendezVous
        return redirect()->route('priserdv');
    }

}


    

