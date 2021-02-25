<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts  = Post::latest()->get();
        // $posts  = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {

        return view('posts.create');
    }
    public function store()
    {
        $post = new Post();

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts')->with('message', 'Post Added');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('delete', 'Post Deleted');
    }
}
