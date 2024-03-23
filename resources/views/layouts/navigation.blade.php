    <div class="continer">
    <nav class="navbar navbar-expand-lg d-flex gap-5 navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand px-3" href="#">Persoanl Blog</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('contact')}}">Contact <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">About <span class="sr-only">(current)</span></a>
              </li>
             
          </ul>
          @guest
              
        
          <div class="d-flex gap-3">
          <a href="/auth/register" class="btn btn-info">Register</a>
          <a href="/auth/login" class="btn btn-success">Login</a>
        </div>
        @endguest

        @auth
                   
        profile
        @endauth
        </div>
      </nav>


    </div>