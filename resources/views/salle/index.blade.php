@extends('layout')
@section('a')

<h1>Liste Des Salles</h1>


    <h4><a class="btn btn-primary" href={{route('create.create')}}>AJOUTER</a></h4>



                    
                    
                    <table class="table">
                      <thead>
                        <tr>
                            <th>id</th>
                            <th>Code</th>
                            <th>Libelle</th>
                            <th>modif</th>
                            <th>Supprimer</th>
                        </tr>
                      </thead>
                      <tbody>


                        @forelse($posts as $p)
                        <tr>
                            <td><a class="btn btn-dark btn-circle" href="{{route('create.show',['create'=>$p->id])}}"> {{$p->id."\n";}} </a></td>
                                <td> {{$p['code'];}}</td>
                                <td>{{$p['libelle'];}}</td>
                                <td><a class="btn btn-success" href="{{route('create.edit',['create'=>$p->id])}}">Modifier</a></td>
                                <td>
                                    <form method="POST" action="{{route('create.destroy',['create'=>$p->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                        </tr>
                        @empty
                    <tr>NO POSTS</tr>   {{--  affichage lorsque la base est vide --}}
                    @endforelse


                        
                        </tr>
                      </tbody>     
    </table>
     

    
 





@endsection