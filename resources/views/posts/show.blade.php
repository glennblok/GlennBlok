@extends('posts.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

            </div>
        </div>

            <div class="form-group">
                <strong>Titel:</strong>
                {{ $post->titel }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $post->titel }}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

    </div>

    </div>
@endsection
