<?php

namespace App\Http\Controllers\Admin;

use App\models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.index' , [
            'articles' => Article::all()
        ]);
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $validate_data = $request->validated();

        Article::create([
            'title' => $validate_data['title'],
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles');
        
    }


    public function edit(Article $article)
    {  

        return view('/admin.articles.edit' , [
            'article' => $article
        ]);

    }

    public function update(ArticleRequest $request,Article $article)
    {
        $validate_data = $request->validated();
        

        $article->update($validate_data);

        return back();
    }

    public function delete(Article $article)
    {
        $article->delete();

        return back();
    }
}
