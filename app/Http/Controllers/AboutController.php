<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();  // Use all() instead of get() for better readability
        return view('admin.about', compact('about'));
    }

    public function update(Request $request, string $id)
    {
        // Validate the request data
        $this->validate($request, [
            'title_ar'      => 'required|min:5',
            'title_en'      => 'required|min:5',
            'image'         => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description1_ar' => 'required|min:10',
            'description1_en' => 'required|min:10',
            'description2_ar' => 'nullable|min:10',
            'description2_en' => 'nullable|min:10',
        ]);

        $post = About::findOrFail($id);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/about', $image->hashName());

            // Delete old image if it exists
            if ($post->image) {
                Storage::delete('public/about/' . $post->image);
            }

            $post->image = $image->hashName();
        }

        // Update the model with request data
        $post->update([
            'title_ar'         => $request->title_ar,
            'title_en'         => $request->title_en,
            'description1_ar'  => $request->description1_ar,
            'description1_en'  => $request->description1_en,
            'description2_ar'  => $request->description2_ar,
            'description2_en'  => $request->description2_en,
            'image'            => $post->image ?? $request->image, // Use existing or new image
        ]);

        return redirect()->route('abouts.index')->with('success', 'Successfully updated About information');
    }
}
