@extends('main')

@section('titolo') Edit user @endsection

@section('content')

            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('stato'))
                        <div class="alert alert-success">
                            {{ session('stato') }}
                        </div>
                    @endif
                        <form class="form-horizontal" role="form" method="POST" action="/users/{{$user->id}}/edit">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    
                </div>
            </div>



@endsection
