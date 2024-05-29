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
        ]);

        $news = new News([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => auth()->id(),
        ]);

        $news->save();

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
