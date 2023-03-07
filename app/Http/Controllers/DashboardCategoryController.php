<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'title' => 'Kategori',
            'about' => About::all()->first(),
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        return view('admin.category.create', [
            'title' => "Tambah Kategori",
            'about' => About::all()->first(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);
        return redirect('/dashboard/category')->with('success', 'Kategori Berhasil Ditambahkan!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'title' => "Ubah Kategori",
            'about' => About::all()->first(),
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);
        return redirect('/dashboard/category')->with('success', 'Kategori berhasil diubah!');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/category')->with('success', 'Kategori berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
