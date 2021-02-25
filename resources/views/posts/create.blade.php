@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Make yourself Heard</h3>

    <form action="" method="" id="form-create">
        <div class="form-group">
            <label for="post-title">Title</label>
            <input type="email" class="form-control" id="post-title" placeholder="Enter Title..">
        </div>

        <div class="form-group">
            <label for="post-body">Body</label>
            <textarea class="form-control" id="post-body" placeholder="What's on your Find"></textarea>
        </div>
        <button class="btn btn-primary">Post</button>
    </form>
</div>


@endsection