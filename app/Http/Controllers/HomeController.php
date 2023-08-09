<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Logo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Carousel::get();
        $logo = Logo::find(1);
        return view('landingpage.index')->with([
            'carousel' => $carousel,
            'logo'     => $logo
        ]);
    }
}
