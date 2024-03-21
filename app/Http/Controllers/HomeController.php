<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        $user=User::class;
        $articles = Article::orderBy('id' , 'desc')->get();
        return view('index', compact('articles','user'));
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
