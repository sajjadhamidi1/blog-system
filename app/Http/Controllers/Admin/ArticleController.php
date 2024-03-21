<?php

namespace App\Http\Controllers\Admin;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ArticleController extends Controller
{

    public function __invoke()
    {
        // ...
    }
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

    public function store( )
    {
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|min:10|max:50',
            'body' => 'required'
        ])->validated();

        // $validate_data = $request->validated();        

       
        


        Article::create([
            'title' => $validate_data['title'],
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles/create');
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit' , [
            'article' => $article
        ]);
    }

    public function update()
    {
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|min:10|max:50',
            'body' => 'required'
        ])->validated();

        $article = Article::findOrFail($id);

        // $validate_data = $request->validated();

        $article->update($validate_data);

        return back();
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        return back();
    }
}
