<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::get();
        return view('admin.gallery', compact('gallery'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->image;
        $image->storeAs('/public/gallery', $image->hashName());

        Gallery::create([
            'image'         => $image->hashName(),
        ]);

        return redirect()->route('gallery.index')->with('success', 'Berhasil Input Product');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->image;
        $image->storeAs('/public/gallery', $image->hashName());

        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'image'         => $image->hashName(),
        ]);

        return redirect()->route('gallery.index')->with('success', 'Berhasil Update Galeri');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return back()->with('success', 'Berhasil Hapus');
    }
}
