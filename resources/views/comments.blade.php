<div>
    @if(auth()->check())

        <form class="mb-6" action="/articles/{{$article->id}}/comments" method="POST">
            @csrf
            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">

                    <textarea class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" name="content" cols="4" rows="10" placeholder="Post your comment"></textarea>

            </div>
            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Post comment
            </button>
        </form>
        </form>
    @else
        <p>Please <a href="auth/login">login</a> to leave a comment.</p>
    @endif

    @if ($article->comments->count() > 0)
        @foreach ($article->comments as $comment)
                <div class="" style="">
                    <div class="w-100 mb-2">
                        <div class=" bg-orange-100 rounded  p-3 rounded flex-col">
                            <p class="flex mr-3 text-sm text-gray-900  font-semibold">{{$comment->user->name}}</p>
                            <hr class="my-1 border border-3 border-orange-700 bg-orange-500">
                            <p class="text-gray-500 ">{{$comment->content}}</p>
                            <p class="text-sm pt-3 text-gray-600"><time>{{$comment->created_at->format('j-F-Y')}}</time></p>
                        </div>
                    </div>
                </div>
        @endforeach
    @else
        <p>No comments available.</p>
    @endif
</div>



