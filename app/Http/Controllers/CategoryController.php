<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();

        return view('admin.category', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
        ]);

        Category::create([
            'name'     => $request->name,
        ]);

        return redirect()->route('category.index')->with('success', 'Berhasil Input Category');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'required',
        ]);

        $post = Category::findOrFail($id);
        $post->update([
            'name'     => $request->name,
        ]);

        return redirect()->route('carousel.index')->with('success', 'Berhasil Update Category');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Berhasil Hapus');
    }
}
