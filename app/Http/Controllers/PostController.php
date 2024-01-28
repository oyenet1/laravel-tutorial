<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function homepage()
    {
        $name = "Banji Adedapo";
        $age = 39;
        $nums = 4;

        $myFood = ["Eba", "Rice", "Beans", "Yam", "egg"];
        $isTall = true;
        $isShort = false;
        return view('homepage', compact(['name', 'age', 'myFood', 'nums', 'isTall', 'isShort']));
    }
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact(['posts']));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact(['post']));
    }
}