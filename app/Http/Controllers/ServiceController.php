<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Schedule;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service', compact('services'));
    }

    public function create()
    {
        return view('admin.service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'required|image',
            'meta_tags_ar' => 'nullable|string',
            'meta_tags_en' => 'nullable|string',
            'meta_description_ar' => 'nullable|string',
            'meta_description_en' => 'nullable|string',
        ]);

        $service = new Service();
        $service->name_ar = $request->name_ar;
        $service->name_en = $request->name_en;
        $service->slug = Str::slug($request->name_en, '-');
        $service->status = $request->status;
        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->meta_tags_ar = $request->meta_tags_ar;
        $service->meta_tags_en = $request->meta_tags_en;
        $service->meta_description_ar = $request->meta_description_ar;
        $service->meta_description_en = $request->meta_description_en;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/service'), $imageName);
            $service->image = $imageName;
        }

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service created successfully.');
    }
    
    public function show($id)
    {
        
        $service = Service::findOrFail($id);
        $images = $service->images; // Fetch images related to the service
        $page = $service->name_en; // or $service->name_ar for Arabic
    
        return view('admin.serviceShow')->with([
            'service'  => $service, 
            'page'     => $page,
            'images'   => $images, // Pass images to the view
        ]);
    }
    
  


    public function edit(Service $service)
    {
        return view('admin.service', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'status' => 'required|string|in:active,inactive',

            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable|image',
            'meta_tags_ar' => 'nullable|string',
            'meta_tags_en' => 'nullable|string',
            'meta_description_ar' => 'nullable|string',
            'meta_description_en' => 'nullable|string',
        ]);

        $service->name_ar = $request->name_ar;
        $service->name_en = $request->name_en;
        $service->slug = Str::slug($request->name_en, '-');
        $service->status = $request->status;
        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->meta_tags_ar = $request->meta_tags_ar;
        $service->meta_tags_en = $request->meta_tags_en;
        $service->meta_description_ar = $request->meta_description_ar;
        $service->meta_description_en = $request->meta_description_en;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($service->image && file_exists(public_path('storage/service/' . $service->image))) {
                unlink(public_path('storage/service/' . $service->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/service'), $imageName);
            $service->image = $imageName;
        }

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        // Delete image if it exists
        if ($service->image && file_exists(public_path('storage/service/' . $service->image))) {
            unlink(public_path('storage/service/' . $service->image));
        }

        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    }
}
