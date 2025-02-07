<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoriesRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categories=Category::paginate(9);
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {       
        return view('admin.categories.create');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category            
        ]);
    }

    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        $date =$request->validated();


        $category->fill($date);

        if ($category->save()) {
            return redirect()->route('admin.categories.show', $category)->with('success', 'Категория успешно изменена!');
        }
        return back()->with('error', 'Ошибка изменения категории');
    }

    public function store(Request $request)
    {
        $сategory=null;
        //валидация данных
        $validated = $request->validate([
            'name' => 'unique:categories|required|min:5|max:255'            
        ]);

        try {
            $сategory = Category::create($validated);
        } catch (\Exception $e) {
            return redirect()->route('admin.categories.create')->with('error', 'Ошибка добавления категории! ' . $e->getMessage());
        }
        return redirect()->route('admin.categories.show', ['category' => $сategory])->with('success', 'Категория успешно добавлен');
    }

    public function show(Category $category)
    {
      return view('admin.categories.show', ['category' => $category]);
    }


    public function destroy(Category $category)
    {

        if ($category->delete()) {
            return redirect()->route('admin.categories.index', )->with('success', 'Категория успешно удалена!');
        }
        return back()->with('error', 'Ошибка удаления категории');
    }

}
