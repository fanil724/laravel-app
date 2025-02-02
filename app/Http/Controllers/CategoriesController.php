<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(Categories $categories)
    {
        $categories = $categories->getCategories();
        return view('categories', ['categories' => $categories, 'message' => ""]);
    }
    public function show(string $id, Categories $categories)
    {
        $categories = $categories->getCategory($id);
        //var_dump($categories);
        if (count($categories) == 0) {

            return view('categories', ['message' => "Не корректный id поста", 'categories' => $categories]);
        }


        return view('category', ['category' => $categories, 'message' => ""]);
    }
}
