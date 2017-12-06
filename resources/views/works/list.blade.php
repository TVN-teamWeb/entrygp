@extends('main')

@section('titolo') WORKS @endsection
@section('sezione') List @endsection

@section('left-menu')
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#">List <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/works/{{ Auth::user()->id }}/create">Add</a>
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

      @foreach ( $works as $work )
      <tr>
        <td> {{$work->id}} </td>
        <td> {{$work->name}} </td>
        <td align="center"> <a href="/users/{{$work->id}}/edit" class="btn btn-sm btn-primary">Edit</a> </td>
        <td align="center"> <a href="/users/{{$work->id}}/delete" class="btn btn-sm btn-danger">Delete</a> </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection
