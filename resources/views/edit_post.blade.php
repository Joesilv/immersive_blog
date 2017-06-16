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
                        <a href="{{ URL::route('home') }}"> Edit My Posts</a>

                    </div>

                    <div class="panel-body">
                        Create a New Post Below:
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('editInfo') }}">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="body" class="col-md-4 control-label">Body</label>

                                <div class="col-md-6">
                                    <textarea name="body">Enter text here...</textarea>

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



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
