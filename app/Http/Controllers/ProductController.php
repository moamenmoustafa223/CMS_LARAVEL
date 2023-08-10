<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        $category = Category::get();

        return view('admin.product', compact(['product','category']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name'          => 'required|min:5',
            'description'   => 'required|min:5',
            'price'         => 'required|numeric',
            'category_id'   => 'required',
        ]);

        $image = $request->image;
        $image->storeAs('/public/product', $image->hashName());

        Product::create([
            'image'         => $image->hashName(),
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
            'category_id'   => $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success', 'Berhasil Input Product');
    }
}
