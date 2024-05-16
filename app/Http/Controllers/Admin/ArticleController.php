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
        if($request->has('image')){

            $image = $request->file('image');
            $extinction=$image->getClientOriginalExtension();
            $filename=time().'.'.$extinction;
            $path='uploads/articles/';
            $image->move(public_path($path), $filename);;
        }
        $validate_data = $request->validated();

        Article::create([
            'title' => $validate_data['title'],
            'image'=>$path.$filename,
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles');
    }


    public function edit(Article $article)
    {

        return view('admin.articles.edit' , [
            'article' => $article
        ]);

    }

    public function update(ArticleRequest $request, Article $article)
    {
        $validate_data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extinction = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extinction;
            $path = 'uploads/articles/';
            $image->move(public_path($path), $filename); // آپلود عکس جدید

            // حذف عکس قبلی اگر وجود داشته باشد
            if ($article->image) {
                unlink(public_path($article->image));
            }

            $validate_data['image'] = $path . $filename; // تنظیم مسیر عکس جدید
        }

        $article->update($validate_data);

        return redirect(route('adminarticles'));
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

    public function search(Request $request)
    {
        $results = [];
        if ($request->filled('search')) {
            $search = $request->input('search');

            $results = Article::where('title', 'like', "%$search%")->get();
        } else {
            $results = Article::all();
        }

        if ($results->isEmpty()) {
            return view('search')->with('error', 'Not Found!')->with('results', $results);
        }

        return view('search')->with('results', $results);
    }


}
