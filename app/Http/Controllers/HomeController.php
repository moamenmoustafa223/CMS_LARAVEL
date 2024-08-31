<?php

namespace App\Http\Controllers;
use App\Models\ContactFormResponse;

use App\Models\About;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactResponse;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Product;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $activeServices = Service::where('status', 'active')->get();
        $logo = Logo::find(1);
        $page = "Home";
        $contact = Contact::find(1);
    
        // Initialize variables with default values
        $email = null;
        $address = null;
        $whatsapp = null;
    
        // Check if $contact is not null before accessing its properties
        if ($contact) {
            $email = $contact->email;
            $address = $contact->address;
            $whatsapp = $contact->whatsapp;
        }
    
        $schedule = Schedule::get();
    
        return view('landingpage.index')->with([
            'services'  => $activeServices, 
            'logo'      => $logo,
            'page'      => $page,
            'schedule'  => $schedule,
            'email'     => $email,
            'whatsapp'  => $whatsapp,
            'address'   => $address,
        ]);
    }
    

    public function services()
    {
        $activeServices = Service::where('status', 'active')->get();
        $logo = Logo::find(1);
        $page = "Services";
        $contact = Contact::find(1); // Attempt to find the contact with ID 1
    
        // Initialize variables with default values
        $email = null;
        $address = null;
        $whatsapp = null;
    
        // Check if $contact is not null before accessing its properties
        if ($contact) {
            $email = $contact->email;
            $address = $contact->address;
            $whatsapp = $contact->whatsapp;
        }
    
        $schedule = Schedule::get();
    
        return view('landingpage.servicesIndex')->with([
            'services'  => $activeServices, 
            'logo'      => $logo,
            'page'      => $page,
            'schedule'  => $schedule,
            'email'     => $email,
            'whatsapp'  => $whatsapp,
            'address'   => $address,
        ]);
    }
    
    public function show($slug)
    {
        $contact = Contact::find(1);
        if ($contact) {
            $email = $contact->email;
            $address = $contact->address;
            $whatsapp = $contact->whatsapp;
        }
    
        $schedule = Schedule::get();
        $service = Service::where('slug', $slug)->firstOrFail();
        $images = $service->images; 
        $page = $service->name_en; // or $service->name_ar for Arabic
        return view('landingpage.servicesShow')->with([
            'service'  => $service, 
            'page'      => $page,
            'schedule'  => $schedule,
            'email'     => $email,
            'whatsapp'  => $whatsapp,
            'address'   => $address,
            'images'   => $images,
        ]);

    }

    public function about()
{
    $page= "About Us";
    $page_en = "About Us";  
    $page_ar = "من نحن"; 
    $schedule = Schedule::get();
    $about = About::all(); 

    return view('landingpage.about')->with([
        'page'     => $page,
        'page_en'     => $page_en,
        'page_ar'     => $page_ar,
        'schedule' => $schedule,
        'about'    => $about, // Pass the entire collection to the view
       
    ]);
}



public function submitContactForm(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    try {
        // Store the form data
        ContactResponse::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->route('index')->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        // Redirect back with an error message
        return redirect()->back()->withErrors(['form' => 'There was an error sending your message. Please try again later.']);
    }
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
    public function article()
    {
        $logo = Logo::find(1);
        $page = "Articles";
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        $article = Article::get();
        return view('landingpage.article')->with([
            'logo'     => $logo,
            'page'     => $page,
            'schedule'  => $schedule,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
            'article'  => $article,
        ]);
    }

    public function articleshow(Article $article)
    {
        $logo = Logo::find(1);
        $page = $article->title;
        $image = $article->image;
        $title = $article->title;
        $content = $article->content;
        $contact = Contact::find(1);
        $email = $contact->email;
        $address = $contact->address;
        $whatsapp = $contact->whatsapp;
        $schedule = Schedule::get();
        return view('landingpage.showArticle')->with([
            'logo'     => $logo,
            'page'     => $page,
            'schedule'  => $schedule,
            'email'  => $email,
            'whatsapp'  => $whatsapp,
            'address'  => $address,
            'image'  => $image,
            'title'  => $title,
            'content'  => $content,
        ]);
    }
}
