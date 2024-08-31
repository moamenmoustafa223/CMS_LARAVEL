<?php

// app/Http/Controllers/ServiceImageController.php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceImageController extends Controller
{
    // Method to show the form for uploading images
    public function create()
    {
        $services = Service::all(); // Get all services
        return view('admin.upload_images', compact('services'));
    }

    // Method to handle the image upload
    public function uploadImages(Request $request)
{
    // Validate the request
    $request->validate([
        'service_id' => 'required|exists:services,id', // Validate selected service ID
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate multiple images
        'image_names_ar.*' => 'nullable|string',
        'image_names_en.*' => 'nullable|string',
    ]);

    // Find the selected service or fail
    $service = Service::findOrFail($request->service_id);

    // Handle the uploaded images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image) {
            $path = $image->store('service_images', 'public');
            ServiceImage::create([
                'service_id' => $service->id,
                'image_path' => $path,
                'name_ar' => $request->input('image_names_ar.'.$index),
                'name_en' => $request->input('image_names_en.'.$index),
            ]);
        }
    }

    // Redirect with a success message
    return redirect()->route('service.uploadImagesForm')->with('success', 'Images uploaded and assigned successfully.');
}
public function update(Request $request, $id)
{
    $image = ServiceImage::findOrFail($id);

    // Validate the request
    $request->validate([
        'image_name_ar' => 'nullable|string',
        'image_name_en' => 'nullable|string',
        'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update image names
    $image->name_ar = $request->image_name_ar;
    $image->name_en = $request->image_name_en;

    // Handle new image upload
    if ($request->hasFile('new_image')) {
        // Delete the old image
        Storage::disk('public')->delete($image->image_path);

        // Store the new image
        $path = $request->file('new_image')->store('service_images', 'public');
        $image->image_path = $path;
    }

    $image->save();

    return redirect()->route('service.uploadImagesForm')->with('success', 'Image updated successfully.');
}

public function destroy($id)
{
    $image = ServiceImage::findOrFail($id);

    // Delete the image file from storage
    Storage::disk('public')->delete($image->image_path);

    // Delete the record from the database
    $image->delete();

    return redirect()->route('service.uploadImagesForm')->with('success', 'Image deleted successfully.');
}
}

