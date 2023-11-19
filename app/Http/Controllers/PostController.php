<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    public function index()
    {
        return view('posts.index');
    }

    public function show($id)
    {
        return view('posts.show', compact(['id']));
    }

}
