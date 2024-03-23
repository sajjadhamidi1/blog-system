<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Article;
class ArticleFrontController extends Controller
{
    public function single( $article)
    {
        return view('single' , compact('article'));
    }
}
