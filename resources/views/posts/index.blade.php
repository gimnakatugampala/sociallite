@extends('layouts.app')

@section('content')
<div class="wrapper all-posts">
    <h3>See the World Around You</h3>

    @foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}.</p>
            <p class="card-text">Posted By : {{$post->user}}.</p>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">See More</a>
        </div>
    </div>
    @endforeach
</div>

@endsection