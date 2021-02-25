@extends('layouts.app')

@section('content')
<div class="container single">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}</p>
            <a href="/posts" class="btn btn-primary edit-delete">Go Back</a>
            <a href="#" class="btn btn-danger edit-delete">Delete</a>
        </div>

    </div>
</div>


@endsection