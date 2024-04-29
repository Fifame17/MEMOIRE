<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Affiche une liste des patients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.patients', compact('patients'));
    }

    /**
     * Affiche le formulaire de création d'un patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create_patient');
    }

    /**
     * Enregistre un nouveau patient dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'dob' => 'required|date',
            // Ajoute d'autres règles de validation si nécessaire
        ]);

        $patient = Patient::create($request->all());

        return redirect()->route('patients.index')
            ->with('success', 'Patient créé avec succès.');
    }

    /**
     * Affiche les détails d'un patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show_patient', compact('patient'));
    }

    /**
     * Affiche le formulaire de modification d'un patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit_patient', compact('patient'));
    }

    /**
     * Met à jour les informations d'un patient dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email,' . $id,
            'dob' => 'required|date',
            // Ajoute d'autres règles de validation si nécessaire
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());

        return redirect()->route('patients.index')
            ->with('success', 'Patient mis à jour avec succès.');
    }

    /**
     * Supprime un patient de la base de données.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Patient supprimé avec succès.');
    }
}


