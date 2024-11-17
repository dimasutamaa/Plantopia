<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.list');
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category' => 'required'
        ]);

        $image = $request->file('product_image');
        $image->storeAs('public/products', $image->hashName());

        Product::create([
            'category_id' => $request->category,
            'product_image' => $image->hashName(),
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('product.list')->with('success', 'Product created successfully.');
    }
}
