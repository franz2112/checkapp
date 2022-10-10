<nav class="navbar navbar-expand-lg py-4 px-lg-5 ">
    <div class="container-fluid d-block">
          
          {{-- responsive --}}
          <div class="d-lg-none">
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <img src="/assets/img/3efdbd.jpeg" class="img-thumbnail rounded-circle" alt="Avatar" width="36px">          
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse ">
                <ul class="nav navbar-nav me-auto">
                  <li class="nav-item py-3">user@gmail.com</li>
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
                  <div href="#" role="button" data-bs-toggle="dropdown"  data-bs-display="static"  class=""><img src="/assets/img/3efdbd.jpeg" class="img-thumbnail rounded-circle" alt="Avatar" width="36px"><span class="ps-2">{{ Auth::user()->lname}}, {{ Auth::user()->fname}} {{ Auth::user()->mname}}</span></div>
                  <ul class="dropdown-menu dropdown-menu-end shadow-lg" style="width: 225px">
                    <li class="px-3 py-1 text-center"><span>Manage Account</span> </li>
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}"> {{ __('Profile') }}</a></li>
                    <li><a class="dropdown-item" href="#">Privacy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="px-3 py-1 text-truncate"><i class="fa-solid fa-globe pe-2"></i>Location</li>
                </li>
              </ul>
        
          </div>

  
    </div>
  </nav>