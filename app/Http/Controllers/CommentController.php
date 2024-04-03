<?php

namespace App\Http\Controllers;
use App\models\Article;
use Illuminate\Http\Request;
use App\models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->user_id = auth()->user()->id;   
        $article->comments()->save($comment);

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
