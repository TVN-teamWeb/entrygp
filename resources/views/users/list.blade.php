@extends('main')

@section('titolo') USERS @endsection
@section('sezione') List @endsection

@section('left-menu')
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#">List <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/users/create">Add</a>
    </li>
  </ul>
</nav>
@endsection

@section('content')
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Role</th>
        <th colspan="2" class="text-center"></th>
      </tr>
    </thead>

    <tbody>

      @foreach ( $users as $user )
      <tr>
        <td> {{$user->id}} </td>
        <td> {{$user->name}} </td>
        <td> {{$user->email}} </td>
        <td> {{$user->ruolo}} </td>
        <td align="center"> <a href="/users/{{$user->id}}/edit" class="btn btn-sm btn-primary">Edit</a> </td>
        <td align="center"> <a href="/users/{{$user->id}}/delete" class="btn btn-sm btn-danger">Delete</a> </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection
