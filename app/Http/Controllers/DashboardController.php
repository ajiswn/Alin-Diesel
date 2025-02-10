<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $num_of_products = Product::count();
        $num_of_categories = Category::count();
        $num_of_admins = User::where('role','Admin')->count();

        return view('admin.dashboard', compact('num_of_products','num_of_categories','num_of_admins'));
    }
}
