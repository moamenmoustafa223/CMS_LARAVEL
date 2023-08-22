<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $admin = auth()->user()->name;
        return view('admin.index',compact('admin'));
    }

}
