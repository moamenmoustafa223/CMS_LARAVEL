<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getPostAbout()
    {
        $about = AboutModel::count();
        return view('admin.postabout',compact('about'));
    }

    public function postAbout(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'content'   => 'required|min:10'
        ]);

        $image = $request->image;
        $image->storeAs('/public/postAbout', $image->hashName());

        AboutModel::create([
            'image'     => $image->hashName(),
            'content'   => $request->content
        ]);

        return back()->with('success', 'Berhasil');
    }

    public function getShowAbout()
    {
        $about = AboutModel::get();
        return view('admin.showabout', compact('about'));
    }

    public function deleteAbout($id)
    {
        $about = AboutModel::findOrFail($id);

        if (Storage::exists('/public/postAbout/' . $about->image)) {
            Storage::delete('/public/postAbout/' . $about->image);
        }
        $about->delete();
        return back()->with('success', 'Berhasil');
    }

    public function editAbout($id)
    {
        $about = AboutModel::findOrFail($id);
        return view('admin.editabout', compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'image|image|mimes:jpeg,png,jpg|max:2048',
            'content'   => 'required|min:10'
        ]);

        $about = AboutModel::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->storeAs('/public/postAbout/' . $image->hashName());

            Storage::delete('/public/postAbout/' . $about->image);

            $about->update([
                'image'     => $image->hashName(),
                'content'   => $request->content,
            ]);
        } else {
            $about->update([
                'content'   => $request->content,
            ]);
        }
        return redirect()->route('admin.getShowAbout');
    }
}
