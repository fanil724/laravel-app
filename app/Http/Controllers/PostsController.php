<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    //
    public function addLike(string $id){
      $post = Post::find($id);
      if($post){
        $post->increment('likes');
        return response()->json([
          'success'=> 'true',
          'message'=> 'Лайк успешно поставлен',
          'likes'=>$post->likes
        ]);
      }

      return response()->json([
        'success'=> false,
        'message'=> 'Пост не найден'],404);
    }
    public function index()
    {
       
        $posts=Post::all();
        $posts=Post::orderBy('likes','desc')->paginate(10);
        return view('posts.index', ['posts' => $posts, 'message' => ""]);
    }
    public function show(Post $post)
    {
      return view('posts.show', ['post' => $post]);
    }
}
