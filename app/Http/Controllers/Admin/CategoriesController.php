<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Admin\Requests;
use App\Http\Controllers\AdminController;

class CategoriesController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'category');
    }

    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $articlecategory = new Category($request->all());
        $articlecategory->save();

        return redirect('admin/categories');
    }

    public function show($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return view('admin.category.show', ['category' => $category]);
    }

    public function edit($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}

