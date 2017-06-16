@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Welcome, {{ Auth::user()->name}} edit biography below:
                        <h1>Edit BioGraphy Page</h1>

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('editInfo') }}">

                           {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit
                                    </button>
                                </div>
                            </div>


                        </form>








                        {{--<p>
                            Name: <b>{{ Auth::user()->name}}</b>
                            <a href="{{ URL::route('editName') }}">Edit </a>
                        </p>

                        <p>User_name: <b>{{ Auth::user()->user_name}}</b>
                            <a href="{{ URL::route('editUserName') }}">Edit </a>
                        </p>

                        <p>
                            Email: <b>{{ Auth::user()->email}}</b>
                            <a href="{{ URL::route('editEmail') }}">Edit </a>
                        </p>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
*/