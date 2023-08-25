<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        return view('landingpage.index')->with([
            'page'     => $page,
            'carousel' => $carousel,
            'logo'     => $logo,
            'gallery'  => $gallery,
            'schedule'  => $schedule,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
        ]);
    }

    public function products()
    {
        $product = Product::get();
        $logo = Logo::find(1);
        $page = "Products";
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        $category = Category::orderBy('name','asc')->get();
        return view('landingpage.products')->with([
            'product' => $product,
            'logo'     => $logo,
            'category'     => $category,
            'page'     => $page,
            'schedule'  => $schedule,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
        ]);
    }

    public function about()
    {
        $logo = Logo::find(1);
        $page = "About Us";
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        $about = About::find(1);
        $title = $about->title;
        $image = $about->image;
        $text = $about->text;
        return view('landingpage.about')->with([
            'logo'     => $logo,
            'page'     => $page,
            'schedule'  => $schedule,
            'text'  => $text,
            'image'  => $image,
            'title'  => $title,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
        ]);
    }

    public function contact()
    {
        $logo = Logo::find(1);
        $page = "Contact Us";
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        return view('landingpage.contact')->with([
            'logo'     => $logo,
            'page'     => $page,
            'schedule'  => $schedule,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
        ]);
    }
}
