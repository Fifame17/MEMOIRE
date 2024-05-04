@foreach($services as $service)
    <p>{{ $service->nom }}</p>
    <p>Date de création : {{ $service->created_at }}</p>
    <p>Dernière mise à jour : {{ $service->updated_at }}</p>
    <p>Date de suppression : {{ $service->deleted_at }}</p>
@endforeach
