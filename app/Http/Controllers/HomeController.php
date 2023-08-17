<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Carousel::get();
        $logo = Logo::find(1);
        return view('landingpage.index')->with([
            'carousel' => $carousel,
            'logo'     => $logo,
        ]);
    }

    public function products()
    {
        $product = Product::get();
        $logo = Logo::find(1);
        $category = Category::orderBy('name','asc')->get();
        return view('landingpage.products')->with([
            'product' => $product,
            'logo'     => $logo,
            'category'     => $category,
        ]);
    }
}
