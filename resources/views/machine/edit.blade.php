@extends('layout')
@section('a')

<form method="POST" action="{{route('createM.update',['createM'=>$post->id])}}" class="mt-3 p-3 border rounded">
@csrf
@method('PUT')
    <div class="form-group">
        <label for="reference">Référence</label>
        <input name="reference" id="reference" type="text" value="{{old('reference',$post->reference)}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="marque">Marque</label>
        <input name="marque" id="marque" type="text" value="{{old('marque',$post->marque)}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input name="prix" id="prix" type="text" value="{{old('prix',$post->prix)}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="salleid">ID de la salle</label>
        <input name="salleid" id="salleid" type="text" value="{{old('salleid',$post->salleid)}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
    @if($errors->any())
<ol class="mt-3">
    <h4 style='color:red'>Erreurs :</h4>
        @foreach ($errors->all() as $e)
        <li>{{$e}}</li>     
        @endforeach
</ol>
@endif
</form>
@endsection