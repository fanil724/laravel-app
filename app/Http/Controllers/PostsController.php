<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    //
    public function index()
    {
       
        $posts=Post::all();
        $posts=Post::paginate(10);
        return view('posts.index', ['posts' => $posts, 'message' => ""]);
    }
    public function show(Post $post)
    {
      return view('posts.show', ['post' => $post]);
    }
}
