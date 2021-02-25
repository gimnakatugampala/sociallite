@extends('layouts.app')

@section('content')
<div class="container single">
    <div class="card text-center">
        <div class="card-body">
            {{$id}}
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/posts" class="btn btn-primary edit-delete">Go Back</a>
            <a href="#" class="btn btn-danger edit-delete">Delete</a>
        </div>

    </div>
</div>


@endsection