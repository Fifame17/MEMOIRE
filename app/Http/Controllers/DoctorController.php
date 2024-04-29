<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Logique pour afficher tous les docteurs
    }

    public function create()
    {
        // Logique pour afficher le formulaire de création d'un docteur
    }

    public function store(Request $request)
    {
        // Logique pour enregistrer un nouveau docteur
    }

    public function show($id)
    {
        // Logique pour afficher un docteur spécifique
    }

    public function edit($id)
    {
        // Logique pour afficher le formulaire d'édition d'un docteur
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour un docteur
    }

    public function destroy($id)
    {
        // Logique pour supprimer un docteur
    }
}
