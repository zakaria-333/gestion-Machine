@extends('layout')
@section('a')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><a class="btn btn-primary" href="{{ route('create.index') }}">Retour</a></h2>
            <ul>
                <li>id : {{ $post->id }}</li>
                <li>Code : {{ $post['code'] }}</li>
                <li>Libelle : {{ $post['libelle'] }}</li>
                <li>Mise à jour : {{ $post->updated_at->diffForHumans() }}</li>
            </ul>
            <h2>Liste des machines dans la salle {{ $post['id'] }} :</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID machine</th>
                        <th>Référence</th>
                        <th>Marque</th>
                        <th>Date d'achat</th>
                        <th>Prix</th>
                        <th>ID de la salle</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($machine as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p['reference'] }}</td>
                        <td>{{ $p['marque'] }}</td>
                        <td>{{ $p->created_at->diffForHumans() }}</td>
                        <td>{{ $p['prix'] }}</td>
                        <td>{{ $p['salleid'] }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6"><em>Aucune machine n'est disponible pour cette salle</em></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection