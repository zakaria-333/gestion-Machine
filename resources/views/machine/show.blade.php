@extends('layout')
@section('a')

<div class="container">
  <h2><a class="btn btn-primary" href="{{ route('create.index') }}">Retour</a></h2>
  <h1>Détails de la machine {{$post->id}}</h1>
  <table class="table table-striped">
    <tbody>
      <tr>
        <td>Reference:</td>
        <td>{{$post['reference']}}</td>
      </tr>
      <tr>
        <td>Marque:</td>
        <td>{{$post['marque']}}</td>
      </tr>
      <tr>
        <td>Date d'achat:</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
      </tr>
      <tr>
        <td>Prix:</td>
        <td>{{$post['prix']}}</td>
      </tr>
      <tr>
        <td>Salle ID:</td>
        <td>{{$post['salleid']}}</td>
      </tr>
    </tbody>
  </table>
  <a href="{{route('createM.edit',['createM'=>$post->id])}}" class="btn btn-primary">Modifier</a>
  <form method="POST" action="{{route('createM.destroy',['createM'=>$post->id])}}" style="display: inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Supprimer</button>
  </form>
</div>
@endsection