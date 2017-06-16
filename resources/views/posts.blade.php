@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard
                        <a href="{{ URL::route('edit') }}"> Edit Bio</a>
                        <a href="{{ URL::route('createPost') }}"> Create Post</a>

                    </div>

                    <div class="panel-body">
                        Welcome to the Forum!

                        {{Auth::user()->name}}

                        @foreach($someguy as $post)
                        <h1>{{$post -> title}}</h1>
                        <p>{{$post -> content}}</p>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
