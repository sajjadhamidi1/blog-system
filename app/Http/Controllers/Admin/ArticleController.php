<?php

namespace App\Http\Controllers\Admin;

use App\models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Article $articles)
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $validate_data = $request->validated();
        $image = $request->file('image');
        $image_name = $image->store('articles', 'public');
        $image_url = Storage::url('articles/' . $image_name);

        
        Article::create([
            'title' => $validate_data['title'],
            'image'=>$image_name,
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles')->with('image_url', $image_url);        
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

    public function single( Article $article)
    {
        return view('single',compact('article'));
    }
}
