    <ul>
        @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        
    </ul>
    @endif
