<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::get();
        return view('admin.article',compact('article'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title'         => 'required|unique:articles,title',
            'content'       => 'required|min:5',
        ]);

        $image = $request->image;
        $image->storeAs('/public/article', $image->hashName());
        $article = Article::get();

        Article::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'content'       => $request->content,
            'slug'          => Str::slug($request->title)
        ]);

        return redirect()->route('article.index')->with('success', 'Berhasil Input Article');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'         => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title'         => 'required|unique:articles,title',
            'content'       => 'required|min:5',
        ]);

        $post = Article::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->storeAs('/public/article/' . $image->hashName());

            Storage::delete('/public/article/' . $post->image);

            $post->update([
                'image'         => $image->hashName(),
                'content'          => $request->content,
                'title'          => $request->title,
            ]);
        } else {
            $post->update([
                'content'          => $request->content,
                'title'   => $request->title,
            ]);
        }

        return redirect()->route('article.index')->with('success', 'Berhasil Update Article');
    }
}
