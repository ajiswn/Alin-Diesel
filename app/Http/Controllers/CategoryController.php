<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::create($validatedData);

        return redirect('/admin/categories')->with('success','Kategori baru berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        if ($request->file('logo')) {
            $request->validate([ 'logo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp' ]);
            if (File::exists($category->logo)) {
                File::delete($category->logo);
            }
            $filename = $request->name.'.'.$request->file('logo')->getClientOriginalExtension();
            $path = "assets/img/categories/{$filename}";
            $request->file('logo')->move('assets/img/categories', $filename);
            $category->logo = $path;
        }

        $category->save();
        $category->update($validatedData);

        return redirect('/admin/categories')->with('success','Kategori berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        foreach ($category->products as $product) {
            foreach ($product->images as $product_image) {
                if (File::exists($product_image->image_path)) {
                    File::delete($product_image->image_path);
                }
            }
            if (File::exists($product->logo)) {
                File::delete($product->logo);
            }      
        }

        $category->delete();

        return redirect('/admin/categories')->with('success','Kategori berhasil dihapus');
    }
}
