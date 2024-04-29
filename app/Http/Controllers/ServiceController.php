<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Logique pour afficher tous les services
    }

    public function create()
    {
        // Logique pour afficher le formulaire de création d'un service
    }

    public function store(Request $request)
    {
        // Logique pour enregistrer un nouveau service
    }

    public function show($id)
    {
        // Logique pour afficher un service spécifique
    }

    public function edit($id)
    {
        // Logique pour afficher le formulaire d'édition d'un service
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour un service
    }

    public function destroy($id)
    {
        // Logique pour supprimer un service
    }
}
