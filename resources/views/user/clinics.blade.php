<!DOCTYPE html>
<html lang="en">

  @section('title') 
  Clinics |  
  @endsection

  @include('user.separated.header')
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="master-part">
      
      <!-- sidebar -->
      @include('user.separated.aside')
      <!-- sidebar ends -->
      
      <!-- body part -->
      <div class="body-part">
        <div class="container">

            <!-- nav -->
            @include('user.separated.nav')
            <!-- nav end -->
            
          <div class="main-content">
            <div class="content-wrapper px-5">
              <!-- navsearch -->
              <div class="nav-search">
                <div class="row">
                  <div class="col d-flex align-items-center">
                    <button
                      class="btn input-group-text dropdown-own shadow"
                      id="defaultDropdown"
                      type="button"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="true"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-sort"></i>
                      Filter
                    </button>
                    <ul class="dropdown-menu dropdown-menu-start shadow-lg">
                      <li><a class="dropdown-item" href="#">Recent</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Favorites</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >New Clinics</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col align-items-center">
                    <div class="input-group input-navbar shadow">
                      <button
                        class="btn input-group-text"
                        type="button"
                        id="button-addon1"
                      >
                        <i class="fa-solid fa-search"></i>
                      </button>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        aria-label="Example text with button addon"
                        aria-describedby="button-addon1"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- navsearch end -->
              <div class="row">
                @foreach ($data as $clinics)
                  @if ($clinics->status=='registered')
                      <div class="col-md-6 col-lg-3 pt-4 wow zoomIn">
                        <div class="card-doctor">
                          <a href="{{ url('user/clinic-menu', $clinics->id) }}">
                            <div class="header">
                              <img src="../assets/admin/img/clinicimage/{{ $clinics->Profile }}" alt="" class="bg-white"/>
                            </div>
                            <div class="body px-0">
                              <h5 class="text-xl mb-0">{{ $clinics->clinicname }}</h5>
                              <p class="text-sm text-grey text-truncate">{{ $clinics->caddress }}</p>
                            </div>
                          </a>
                        </div>
                      </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
          <!-- main content end -->
        </div>
      </div>
      <!-- Body part-->

      @include('user.separated.footer')
    </div>
  </body>
</html>
