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
        return view('priserdv', ['services' => $services]);
    }
}
    

