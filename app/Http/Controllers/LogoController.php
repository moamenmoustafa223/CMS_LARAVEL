<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::get();
        return view('admin.logo', compact('logo'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->image;
        $image->storeAs('/public/logo', $image->hashName());

        Logo::create([
            'image'     => $image->hashName(),
        ]);

        return redirect()->route('logo.index')->with('success', 'Berhasil Input Logo');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = Logo::findOrFail($id);

        $image = $request->image;
        $image->storeAs('/public/logo/' . $image->hashName());

        Storage::delete('/public/logo/' . $post->image);

        $post->update([
            'image'     => $image->hashName(),
        ]);
        return redirect()->route('logo.index')->with('success','Berhasil Update Logo');
    }
}
