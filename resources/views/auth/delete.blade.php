@extends('superadmin')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">delete</th><!-- 
      <th scope="col">email</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{ url('superadmin/delete/' .$user->id)}}" class="btn btn-danger">Delete</td>
</tr>
@endforeach
  </tbody>
</table>
@endsection