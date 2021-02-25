@extends('layouts.app')

@section('content')
<div class="wrapper all-posts">
    <h3>See the World Around You</h3>

    <p class="created">{{session('message')}}</p>

    <p class="delete">{{session('delete')}}</p>


    @foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}.</p>
            <p class="card-text">Created At : {{$post->created_at}}.</p>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">See More</a>
        </div>
    </div>
    @endforeach
</div>

<script>
    const deleted = document.querySelector('.delete');
    const created = document.querySelector('.created');

    setTimeout(function() {
        document.querySelector('.created').remove();
    }, 2000)

    setTimeout(function() {
        document.querySelector('.delete').remove();
    }, 2000)

    if (deleted.textContent === '') {
        deleted.style.backgroundColor = 'white';
    }

    if (created.textContent === '') {
        created.style.backgroundColor = 'white';
    }
</script>

@endsection