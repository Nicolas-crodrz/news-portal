<?php

namespace App\Http\Controllers;

use App\Models\News;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        Flash::success('El objeto se ha guardado correctamente.');
        $news = News::all();
        return view('home', compact('news'));
    }
}
