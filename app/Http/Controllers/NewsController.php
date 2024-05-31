<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,gif'
        ]);
    
        $news = News::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => auth()->id(),
        ]);
    
        if ($request->hasFile('media')) {
            // Guardar la imagen en public/img
            $news->addMedia($request->file('media'))->toMediaCollection('images', 'public_img');

        }
    
        return redirect('/news')->with('success', 'News saved!');
    }
    

    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news = News::find($id);
        $news->title = $request->get('title');
        $news->content = $request->get('content');
        $news->save();

        return redirect('/news')->with('success', 'News updated!');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('/news')->with('success', 'News deleted!');
    }
}
