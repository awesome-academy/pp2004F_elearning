<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

    public function create()
    {
        return view('category/create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->get('name');
        $category->save();
        return redirect('categories');
    }

    public function edit($id)
    {
        $category = Category::whereId($id)->firstOrFail();
        return view('category/edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();
        return redirect()->route('category');
    }

    public function delete($id)
    {
        $category = Category::whereId($id);
        $category->delete();
        return redirect('categories');
    }
}
