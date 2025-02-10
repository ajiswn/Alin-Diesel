<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->where('status','Aktif')->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $setting = Setting::first();

        return view('index',compact('products','categories','setting'));
    }

    public function productDetails(string $product_id)
    {
        $product = Product::findOrFail($product_id);
        $setting = Setting::first();

        return view('product-details',compact('product','setting'));
    }
}
