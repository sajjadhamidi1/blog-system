<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        // ...
    }
    public function home()
    {
        $articles = Article::orderBy('id' , 'desc')->get();
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
