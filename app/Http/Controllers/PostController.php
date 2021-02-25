<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($id)
    {
        return view('posts.show', ['id' => $id]);
    }
    public function create()
    {
        return view('posts.create');
    }
}
