@extends('layouts.app')

@section('content')
<div class="container single">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}</p>
            <a href="{{route('posts.index')}}" class="btn btn-primary edit-delete">Go Back</a>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger edit-delete">Delete</button>
            </form>
        </div>

    </div>
</div>


@endsection