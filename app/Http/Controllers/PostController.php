<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function homepage()
    {
        $name = "Banji Adedapo";
        $age = 78;
        $nums = 4;

        $myFood = ["Eba", "Rice", "Beans", "Yam", "egg"];
        return view('homepage', compact(['name', 'age', 'myFood', 'nums']));
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
