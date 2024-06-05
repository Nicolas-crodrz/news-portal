<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Flash;

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

        // Flash message
        session()->flash('flash_notification.message', 'Noticia creada correctamente');
        session()->flash('flash_notification.level', 'success');
   
        return redirect('/news');
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
        // Flash message
        session()->flash('flash_notification.message', 'Noticia actualizada correctamente');
        session()->flash('flash_notification.level', 'success');

        return redirect('/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
    
        // Flash message
        session()->flash('flash_notification.message', 'Noticia eliminada correctamente');
        session()->flash('flash_notification.level', 'error');
        
        return redirect('/news');
    }
    
    
}
