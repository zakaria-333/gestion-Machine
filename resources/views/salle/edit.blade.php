@extends('layout')
@section('a')
<form method="POST" action="{{route('create.update',['create'=>$post->id])}}" class="form-group">
@csrf
@method('PUT')
    <div class="form-group">
        <label for="code">code</label>
        <input name="code" id="code" type="text" value="{{old('code',$post->code)}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="libelle">libelle</label>
        <input name="libelle" id="libelle" type="text" value="{{old('libelle',$post->libelle)}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>

    @if($errors->any())
    <ol>
        <h4 style='color:red'>Errors are :</h4>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>     
            @endforeach
    </ol>
    @endif

</form>

@endsection
