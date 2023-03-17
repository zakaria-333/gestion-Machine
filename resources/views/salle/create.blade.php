@extends('layout')
@section('a')
<form method="POST" action="{{route('create.store')}}" class="form-group">
@csrf
    <div class="form-group">
        <label for="code">code</label>
        <input name="code" id="code" type="text" value="{{old('code')}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="libelle">libelle</label>
        <input name="libelle" id="libelle" type="text" value="{{old('libelle')}}" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>

    @if($errors->any())
    <ol>
        <h4 style='color:rgb(253, 0, 0)'>Errors are :</h4>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>     
            @endforeach
    </ol>
    @endif

</form>
@endsection
