<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function categories(Categories $categories)
    {
        $categories = $categories->getCategories();
        return view('admin.categories', ['categories' => $categories, 'message' => ""]);
    }

    public function add()
    {
        return redirect()->route('admin.posts');
    }

    public function posts(Posts $posts)
    {

        $posts = $posts->getPosts();

        return view('admin.posts', ['posts' => $posts, 'message' => ""]);
    }
    public function show(string $id, Posts $posts)
    {
        $post = $posts->getPost($id);
        if (count($post) == 0) {
            $posts = $posts->getPosts();
            return view('admin.posts', ['message' => "Не корректный id поста", 'posts' => $posts]);
        }


        return view('admin.post', ['post' => $post]);
    }
}
