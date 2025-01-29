<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Posts $posts)
    {
        $posts = $posts->getPosts();
        return view('posts', ['posts' => $posts, 'message' => ""]);
    }
    public function show(string $id, Posts $posts)
    {
        $post = $posts->getPost($id);
        if (count($post) == 0) {
            $posts = $posts->getPosts();
            return view('posts', ['message' => "Не корректный id поста", 'posts' => $posts]);
        }


        return view('post', ['post' => $post]);
    }
}
