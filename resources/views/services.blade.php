<!-- resources/views/services/index-services.blade.php -->

   @extends('layouts.app')

   @section('content')
       <h1>Liste des services</h1>
       <!-- Afficher la liste des services ici -->
   @endsection

@foreach($services as $service)
    <p>{{ $service->nom }}</p>
@endforeach



