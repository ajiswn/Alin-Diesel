<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $num_of_products = Product::all()->count();
        $num_of_categories = Category::all()->count();

        return view('admin.dashboard', compact('num_of_products','num_of_categories'));
    }
}
