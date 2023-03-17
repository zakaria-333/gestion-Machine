@extends('layout')
@section('a')

<h1>Liste Des Machines</h1>
<h4 scope="row"><a class="btn btn-primary" href={{route('createM.create')}}>AJOUTER</a></h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Référence</th>
      <th scope="col">Marque</th>
      <th scope="col">Date d'achat</th>
      <th scope="col">Prix</th>
      <th scope="col">Salle ID</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    
        
        
    
    @forelse($posts as $p)
        <tr>
            <th ><a class="btn btn-dark btn-circle"scope="row" href="{{route('createM.show',['createM'=>$p->id])}}"> {{$p->id}} </a></th>
            <td>{{$p['reference']}}</td>
            <td>{{$p['marque']}}</td>
            <td>{{$p->created_at->diffForHumans()}}</td>
            <td>{{$p['prix']}}</td>
            <td>{{$p['salleid']}}</td>
            <td>
                <a class="btn btn-success" href="{{route('createM.edit',['createM'=>$p->id])}}">Modifier</a>
                
            </td>
            <td>
                <form method="POST" action="{{route('createM.destroy',['createM'=>$p->id])}}">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    
    @empty
        <tr>
            <td colspan="7"><em>NO POSTS</em></td>
        </tr>
    @endforelse
</tbody>
</table>
@endsection