<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $extension = strtolower($file->getClientOriginalExtension());
                if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                    return back()
                        ->withInput()
                        ->withErrors(['images' => 'File harus berupa gambar dengan format jpg, jpeg, png, atau webp']);
                }
            }
        }

        $validatedData = $request->validate([
            'name'          => 'required|max:255',
            'category_id'   => 'required|exists:categories,id',
            'description'   => 'required',
            'logo'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'images'        => 'required|array|min:1',
            'images.*'      => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);

        if ($request->file('logo')) {
            $filename = $request->name.'.'.$request->file('logo')->getClientOriginalExtension();
            $path = "assets/img/product-logos/{$filename}";
            $request->file('logo')->move('assets/img/product-logos', $filename);
            $validatedData['logo'] = $path;
        }
        
        $product = Product::create($validatedData);

        $imageData = [];
        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $product->id.'-'.$request->name.'-'.time().$key.'.'.$extension;
                $path = "assets/img/product-images/";
                $file->move($path, $filename);
                $imageData[] = [
                    'product_id'    => $product->id,
                    'image_path'    => $path.$filename,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            }
        }

        Image::insert($imageData);

        return redirect('/admin/products')->with('success','Produk baru berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $product_images = $product->images;

        return view('admin.product.show',compact('product','product_images'));
    }

    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        $product_images = $product->images;

        return view('admin.product.edit',compact('product','categories','product_images'));
    }

    public function update(Request $request, string $id)
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $extension = strtolower($file->getClientOriginalExtension());
                if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                    return back()
                        ->withInput()
                        ->withErrors(['images' => 'File harus berupa gambar dengan format jpg, jpeg, png, atau webp']);
                }
            }
        }

        $product = Product::findOrFail($id);
        $num_of_product_image = $product->images->count();
        if ($num_of_product_image == 0) {
            $validatedImage = $request->validate([
                'images' => 'required|array|min:1'
            ]);
        }

        $validatedData = $request->validate([
            'name'          => 'required|max:255',
            'category_id'   => 'required|exists:categories,id',
            'description'   => 'required',
            'status'        => 'required',
        ]);

        if ($request->file('logo')) {
            $request->validate([ 'logo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp' ]);
            if (File::exists($product->logo)) {
                File::delete($product->logo);
            }
            $filename = $request->name.'.'.$request->file('logo')->getClientOriginalExtension();
            $path = "assets/img/product-logos/{$filename}";
            $request->file('logo')->move('assets/img/product-logos', $filename);
            $product->logo = $path;
        }

        $product->save();
        $product->update($validatedData);

        $imageData = [];
        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $id.'-'.$request->name.'-'.time().$key.'.'.$extension;
                $path = "assets/img/product-images/";
                $file->move($path, $filename);
                $imageData[] = [
                    'product_id'    => $id,
                    'image_path'    => $path.$filename,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            }
        }

        Image::insert($imageData);

        return redirect('/admin/products')->with('success','Produk berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        foreach ($product->images as $product_image) {
            if (File::exists($product_image->image_path)) {
                File::delete($product_image->image_path);
            }
        }

        if (File::exists($product->logo)) {
            File::delete($product->logo);
        }

        $product->delete();

        return redirect('/admin/products')->with('success','Produk berhasil dihapus');
    }

    public function destroyProductImage(string $product_image_id)
    {
        $product_image = Image::findOrFail($product_image_id);
        if (File::exists($product_image->image_path)) {
            File::delete($product_image->image_path);
        }

        $product_image->delete();

        return redirect()->back()->with('success','Gambar berhasil dihapus');
    }
}
