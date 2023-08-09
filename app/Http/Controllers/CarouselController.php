<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousel = Carousel::get();
        return view('admin.postcarousel', compact('carousel'));
    }

    public function edit(Request $request)
    {
        $data = Carousel::findOrFail($request->get('id'));
        echo json_encode($data);
    }
    public function create()
    {
        return view('admin.postcarousel');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=1920,min_height=1080,max_width=1920,max_height=1080',
            'title'     => 'required|min:5',
        ]);

        $image = $request->image;
        $image->storeAs('/public/carousel', $image->hashName());

        Carousel::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
        ]);

        return redirect()->route('carousel.index')->with('success', 'Berhasil Input Carousel');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=1920,min_height=1080,max_width=1920,max_height=1080',
            'title'     => 'required|min:5',
        ]);

        $post = Carousel::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->storeAs('/public/carousel/' . $image->hashName());

            Storage::delete('/public/carousel/' . $post->image);

            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
            ]);
        } else {
            $post->update([
                'title'     => $request->title,
            ]);
        }

        return redirect()->route('carousel.index');
    }

    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);

        if (Storage::exists('/public/carousel/' . $carousel->image)) {
            Storage::delete('/public/carousel/' . $carousel->image);
        }
        $carousel->delete();
        return back()->with('success', 'Berhasil Hapus');
    }
}
