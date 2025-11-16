<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view("category.index", 
        [
            "title" => "Daftar Kategori",
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create", ["title" => "Form Tambah Kategori"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|string|min:2|max:255'
        ]);

        Category::create([
            'category_name'=>$request->category_name
        ]);

        return redirect()
            ->route('category.index')
            ->with('success', 'new category created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        return view('category.edit', ['title'=>'Edit Kategori'], ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name'=>'required|string|min:2|max:255'
        ]);

        $category = Category::find($id);

        $category->update([
            'category_name'=>$request->category_name
        ]);

        return redirect()
            ->route('category.index')
            ->with('success', 'category successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'category deleted');
    }
}
