<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = ProductCategory::all(); // Fetch categories for the dropdown
        return view('products.create', compact('categories'));
    }
}
