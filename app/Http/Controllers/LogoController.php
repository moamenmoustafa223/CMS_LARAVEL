<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::all(); // Changed to all() for better clarity
        return view('admin.logo', compact('logo'));
    }

    public function store(Request $request)
    {
        // Validate the request, including the new fields
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'brief_ar'  => 'nullable|string|max:255',
            'brief_en'  => 'nullable|string|max:255',
        ]);

        $image = $request->file('image'); // Use file() method to handle file uploads
        $imagePath = $image->storeAs('public/logo', $image->hashName());

        Logo::create([
            'image'     => $image->hashName(),
            'brief_ar'  => $request->input('brief_ar'),
            'brief_en'  => $request->input('brief_en'),
        ]);

        return redirect()->route('logo.index')->with('success', 'Logo successfully created');
    }

    public function update(Request $request, $id)
    {
        // Validate the request, including the new fields
        $this->validate($request, [
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brief_ar'  => 'nullable|string|max:255',
            'brief_en'  => 'nullable|string|max:255',
        ]);

        $logo = Logo::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/logo', $image->hashName());

            // Delete the old image if it exists
            if ($logo->image) {
                Storage::delete('public/logo/' . $logo->image);
            }

            $logo->image = $image->hashName();
        }

        // Update other fields
        $logo->update([
            'brief_ar'  => $request->input('brief_ar', $logo->brief_ar),
            'brief_en'  => $request->input('brief_en', $logo->brief_en),
        ]);

        return redirect()->route('logo.index')->with('success', 'Logo successfully updated');
    }
}
