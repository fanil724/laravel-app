<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $categories=Category::paginate(5);
        return view('categories.index', compact('categories'));
    }
    public function show(Category $category)
    {      
        return view('categories.show', [
            'category' => $category
        ]);
      
    }
}
