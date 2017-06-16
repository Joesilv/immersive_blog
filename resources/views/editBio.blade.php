@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard
                        <a href="{{ URL::route('home') }}"> Home</a>
                        <a href="{{ URL::route('edit') }}"> Edit Bio</a>
                        <a href="{{ URL::route('createPost') }}"> Create Post</a>
                    </div>

                    <div class="panel-body">
                        Welcome, {{ Auth::user()->name}} you may make edits below:
                        <h1>Edit BioGraphy</h1>

                        <p>
                            Name: <b>{{ Auth::user()->name}}</b>
                            <a href="{{ URL::route('editInfo') }}">Edit </a>
                        </p>

                        <p>User_name: <b>{{ Auth::user()->user_name}}</b>
                            <a href="{{ URL::route('editInfo') }}">Edit </a>
                        </p>

                        <p>
                            Email: <b>{{ Auth::user()->email}}</b>
                            <a href="{{ URL::route('editInfo') }}">Edit </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
