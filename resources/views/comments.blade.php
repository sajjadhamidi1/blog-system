<div>
    @if(auth()->check())
        <form action="/articles/{{$article->id}}/comments" method="POST">
            @csrf
            <div class="form-control">
                <textarea name="content" cols="30" rows="10" placeholder="Post your comment"></textarea>
            </div>
            <input type="submit" class="btn btn-primary mt-1" id="submit-comment" value="Send">
        </form>
    @else
        <p>Please <a href="/login">login</a> to leave a comment.</p>
    @endif
    
    @if ($article->comments->count() > 0)
        @foreach ($article->comments as $comment)
            <div class="card mb-2">
                <div class="card-header">
                    <p>{{$comment->user->name}}</p>
                </div>
                <div class="card-body">
                    <p>{{$comment->content}}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No comments available.</p>
    @endif
</div>
