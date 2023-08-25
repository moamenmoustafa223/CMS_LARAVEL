<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::get();
        return view('admin.about',compact('about'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title'         => 'required|min:5',
            'image'         => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'text'          => 'required|min:5',
        ]);

        $post = About::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->storeAs('/public/about/' . $image->hashName());

            Storage::delete('/public/about/' . $post->image);

            $post->update([
                'title'         => $request->title,
                'image'         => $image->hashName(),
                'text'          => $request->text,
            ]);
        } else {
            $post->update([
                'title'         => $request->title,
                'text'          => $request->text,
            ]);
        }

        return redirect()->route('abouts.index')->with('success','Berhasil Update About');
    }
}
