@extends('layout')
@section('a')

<form method="POST" action="{{route('createM.store')}}">
@csrf
    <div class="form-group">
        <label for="reference">Référence</label>
        <input name="reference" id="reference" type="text" value="{{old('reference')}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="marque">Marque</label>
        <input name="marque" id="marque" type="text" value="{{old('marque')}}" class="form-control">
    </div>
    {{-- <div>    <input name="dateAchat" id="dateAchat" type="hidden" value="2023-03-14 23:46:30">
</div> --}}
<div class="form-group">
    <label for="prix">Prix</label>
    <input name="prix" id="prix" type="text" value="{{old('prix')}}" class="form-control">
</div>
<div class="form-group">
    <label for="salleid">ID de la salle</label>
    <input name="salleid" id="salleid" type="text" value="{{old('salleid')}}" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Ajouter</button>

@if($errors->any())
<ol>
    <h4 style='color:rgb(253, 0, 0)'>Les erreurs suivantes se sont produites :</h4>
        @foreach ($errors->all() as $e)
        <li>{{$e}}</li>     
        @endforeach
</ol>
@endif
</form>
@endsection