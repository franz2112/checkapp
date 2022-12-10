<nav class="navbar navbar-expand-lg py-4 px-lg-5 ">
    <div class="container-fluid d-block">
          
          {{-- responsive --}}
          <div class="d-lg-none">
            <button
                class="navbar-toggler mt-2"
                type="button"
                data-bs-toggle="offcanvas" 
                data-bs-target="#offcanvasCheck"
            >          
              <span class="fa-solid fa-bars"></span>
            </button>
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->fname }}"  class="rounded-circle border" style="width: 35px; height:35px; object-fit: cover;">
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse ">
                <ul class="nav navbar-nav me-auto">
                  <li class="nav-item py-3">{{ Auth::user()->fname}} {{ Auth::user()->mname}} {{ Auth::user()->lname}}</li>
                  <li><hr></li>
                  <li class="nav-item"><span class="nav-link fw-semibold text-dark">Manage Account</span></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                  <li class="nav-item pt-2"><i class="fa-solid fa-globe pe-2"></i>Location</li>
                  
                </ul>
            </div>
          </div>
          
          {{-- hover --}}
          <div class="d-none d-lg-block">
            <!-- Collection of nav links, forms, and other content for toggling -->
          
              <ul class="navbar-nav navbar-right d-flex justify-content-end ">
                <li class="dropdown"> 
                  <div href="#" role="button" data-bs-toggle="dropdown"  data-bs-display="static"  class="">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->fname }}"  class="rounded-circle border" style="width: 35px; height:35px; object-fit: cover;">
                    <span>{{ Auth::user()->fname}} {{ Auth::user()->mname}} {{ Auth::user()->lname}}</span>
                  </div>
                  <ul class="dropdown-menu dropdown-menu-end shadow-lg" style="width: 225px">
                    <li class="px-3 py-1 text-center fw-light"><span>Manage Account</span> </li>
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}"> {{ __('Profile') }}</a></li>
                    <li><a class="dropdown-item" href="#">Privacy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="px-3 py-1 text-truncate"><i class="fa-solid fa-globe pe-2"></i>Location</li>
                </li>
              </ul>
        
          </div>

  
    </div>
  </nav>