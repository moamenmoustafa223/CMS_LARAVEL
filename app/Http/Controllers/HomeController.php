<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Product;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Carousel::get();
        $logo = Logo::find(1);
        $page = "Home";
        $gallery = Gallery::get();
        $contact = Contact::get();
        $schedule = Schedule::get();
        return view('landingpage.index')->with([
            'page'     => $page,
            'carousel' => $carousel,
            'logo'     => $logo,
            'gallery'  => $gallery,
            'contact'  => $contact,
            'schedule'  => $schedule,
        ]);
    }

    public function products()
    {
        $product = Product::get();
        $logo = Logo::find(1);
        $page = "Products";
        $contact = Contact::get();
        $category = Category::orderBy('name','asc')->get();
        $schedule = Schedule::get();
        return view('landingpage.products')->with([
            'product' => $product,
            'logo'     => $logo,
            'category'     => $category,
            'page'     => $page,
            'contact'  => $contact,
            'schedule'  => $schedule,
        ]);
    }
}
