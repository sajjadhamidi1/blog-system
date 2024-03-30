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
                   
        <div class="container py-5 ">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
  <ul class="list-unstyled">
    <li class="dropdown ml-2">
						
								<a class="rounded-circle " href="#" role="button" id="dropdownUser"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="avatar avatar-md avatar-indicators avatar-online">
									<i class="fa fa-user"></i>
									</div>
								</a> 
				
								<div class="dropdown-menu pb-2" aria-labelledby="dropdownUser">
									<div class="dropdown-item">
										<div class="d-flex py-2">
											<div class="avatar avatar-md avatar-indicators avatar-online  rounded ">
												<i class="fa fa-user"></i>
											</div>
											<div class="ml-3 lh-1">
												<h5 class="mb-0">sajjad</h5>
												<p class="mb-0">stranimation@gmail.com</p>
											</div>
				
										</div>
										
									</div>
									<div class="dropdown-divider"></div>
									<div class="">
										<ul class="list-unstyled">
							
											<li>
												<a class="dropdown-item" href="@@webRoot/pages/profile-edit.html">
                          <span class="mr-1">
                            <i class="fa fa-dashboard"></i>
                          </span>dashbord
												</a>
											</li>
											
										
										</ul>
									</div>
									<div class="dropdown-divider"></div>
									<ul class="list-unstyled">
									<li>
										<a href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
									</li>
								
								</ul>
									
								</div>
						</li>
  </ul>
  
</div>
            
    </div>
     </div> </div>
        @endauth
        </div>
      </nav>


    </div>