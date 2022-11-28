<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>{{ config('app.name', 'CheckApp') }}</title>
        
        <link rel="shortcut icon" href="../assets/img/Checkapp logo 2.0.png" />
        
        <link rel="stylesheet" href="../assets/css/style.css"/>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
        <style>
          .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover{
            border: 1px solid #ffff;
            background: #35bf53;
            font-weight: normal;
            color: #ffffff;
          }
          .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight{
            border: 1px solid #000000;
            background: #ebffef;
            color: #000000;
          }
        </style>

        @vite([
          'resources/js/app.js',
          
          'resources/js/bootstrap.js',

          'public/assets/css/style.css', 
          
          'public/assets/js/check.js', 
    
          'public/assets/vendor/all.js'

           ])
        
        @livewireStyles
    </head>

  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="master-part">
      <!-- body part -->
      <div class="body-part">
        <!-- modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Our Services</h4>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">Modal body..</div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
        <div class="container-fluid px-md-5">
          <!-- header -->
          <nav class="py-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center p-lg-0">
                <div class="main-title-page">
                  <a href="/" class="">
                    <img src="../assets/img/CheckappLogo.png" alt="logo" />
                    <span class="links-name text-black">Check</span>
                    <span class="links-name">App</span>
                  </a>
                </div>
              </div>
              <div
                class="col-6 d-flex align-items-center flex-row-reverse p-lg-0"
              >
                <ul class="m-0">
                  <li class="dropdown"> 
                    <div href="#" role="button" data-bs-toggle="dropdown"  data-bs-display="static"  class="">
                      <img class="rounded-circle img-thumbnail" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->fname) }}&rounded=true&background=random&length=1&size=32px&color=ff000" alt="">
                      <span class="ps-1">
                        {{ Auth::user()->fname}} 
                        {{ Auth::user()->mname}}
                        {{ Auth::user()->lname}}
                     
                      </span>
                      <i class="ps-2 fa-solid fa-angle-down"></i>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" style="width: 225px; font-size: 14px">
                      <li class="px-3 py-1 text-center fw-light" style="font-size: 12px"><span>Manage Account</span> </li>
                      <li><a class="dropdown-item" href="{{ route('profile.show') }}"> {{ __('Profile') }}</a></li>
                      <li><a class="dropdown-item" href="#">Privacy</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li class="px-3 py-1 text-truncate"><i class="fa-solid fa-globe pe-2"></i>{{ Auth::user()->address}}
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <li class="dropdown-item">
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="text-danger" >
                                <i
                                class="icons fa-solid pe-2 fa-arrow-right-from-bracket"
                                data-fa-transform="flip-h"
                                ></i>
                                <span class="links-name">{{ __('Log Out') }}</span>
                            </a>
                        </li>
                      </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- header end -->

          <div class="content-wrapper">
            <div class="row">
              <!--  info -->
              @foreach ($clinic as $clinicdata)
              <div class="col-lg-3 px-lg-0 py-1">
                <div class="card details mb-2">
                  <div class="card-body">
                    <div class="col-12">
                      <img
                        src="/assets/admin/img/clinicimage/{{$clinicdata->Profile}}"
                        class="img-thumbnail rounded-circle"
                        alt="..."
                        style="height: 150px;"
                      />

                      <hr class=" border-success border-2 opacity-50" />

                      <div class="row">
                        <div class="col-lg-12">
                          <h5>About Us</h5>
                          <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium vdoloremque laudantium, totam
                            Sed
                          </p>
                        </div>

                        <!-- our doctors -->
                        <div class="col-lg-12">
                          <div class="row">
                            <h6 class="mb-0">Doctors and Staff</h6>
                            <div class="doctor-p">
                              <span class="mx-1">
                                <img
                                  src="../assets/img/3efdbd.jpeg"
                                  class="img-thumbnail"
                                  alt="..."
                                />
                              </span>
                              <span class="mx-1">
                                <img
                                  src="../assets/img/3efdbd.jpeg"
                                  class="img-thumbnail"
                                  alt="..."
                                />
                              </span>
                              <span class="mx-1">
                                <img
                                  src="../assets/img/3efdbd.jpeg"
                                  class="img-thumbnail"
                                  alt="..."
                                />
                              </span>
                              <span class="mx-1">
                                <img
                                  src="../assets/img/3efdbd.jpeg"
                                  class="img-thumbnail"
                                  alt="..."
                                />
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              <!-- appoint -->
              <div class="col-lg-6 py-1">
                <div class="row">
                  @foreach ($clinic as $dataClinics)
                    <div class="col-lg-12">
                      <div class="clinic-title">
                        <h2 class="px-1 mb-0">{{$dataClinics->clinicname}}</h2>
                        <button class="like-btn mt-1">
                          <span id="icon"><i class="far fa-star"></i></span>
                          Favorites
                        </button>
                      </div>
                      <p class="px-1 mb-2">
                        <i
                          class="fa-solid fa-location-dot"
                          style="color: #fdc269"
                        ></i>
                        {{$dataClinics->caddress}}
                      </p>
                    </div>
                  @endforeach
                  {{-- set appointment --}}
                  <div class="col-lg-12 mb-3">
                    <div class="card set-appoint">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <h5 class="mb-0 px-3">Set an Appointment</h5>
                            <hr class="m-2" />
                            @foreach ($clinic as $clinics)
                            <div id="app">
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
             {{-- set appointment --}}


              <!-- right part -->
              <div class="col-lg-3 px-lg-0 py-1">
                <div class="row">
                  <div class="r-sidebar">
                    <div class="col-12 mb-2">
                      <a href="/Appointment">
                        <div class="find-new-btn">My Appointments</div>
                      </a>
                    </div>

                    <!-- schedule -->
                    <div class="col mb-2">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <h6 class="mb-0">Schedules</h6>
                            </div>
                            <!-- custom schedule -->
                            <div class="col-12">
                              <div class="sched-set">
                                <p class="fw-semibold mb-0">
                                  Monday - Saturday
                                </p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                                <p class="mb-0">8:00 AM - 6:00 PM</p>
                              </div>
                            </div>
                            <!-- custom schedule -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- fee -->
                    <div class="col-12 mb-2">
                      <div
                        class="card"
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#myModal"
                      >
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <div
                                class="d-flex align-items-center align-self-start"
                              >
                                <h6 class="mb-0">Our Services</h6>
                              </div>
                            </div>
                            <div class="col-12">
                              <div
                                class="d-flex align-items-center align-self-start"
                              >
                                <p class="mb-0 fst-italic">Click Here</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Status -->
                    <div class="col-12 mb-2">
                      <div class="card right-d">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <h6 class="mb-1">Status</h6>
                            </div>
                            <div class="col-12 mb-1">
                              <div
                                class="d-flex align-items-center align-self-start"
                              >
                                <span class="S-design px-3 py-1">
                                  THE DOCTOR IS IN
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Status -->
                    <!-- updates -->
                    <div class="col-12 mb-3">
                      <div class="card right-d">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <h6 class="mb-1">Updates</h6>
                            </div>
                            <div class="col-12 mb-1">
                              <div
                                class="d-flex align-items-center align-self-start"
                              >
                                <div class="row">
                                  <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium vdoloremque
                                    laudantium, totam rem aasdasd asdas d Sed ut
                                    perspiciatis unde omnis iste natus error sit
                                    
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- updates -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Body part-->

      {{-- footer --}}
      @include('user.separated.footer')
      {{-- footer end --}}

    @if (session()->has('message'))
    <div class="alert alert-success 
    alert-dissmissible 
    fade show 
    position-fixed
    z-index-2  
    bottom-0 end-0 p-0 m-3 shadow-lg  rounded-0
    "role="alert"
    id="dismiss">
      <div class="p-3  rounded-0">
        <div class="row">
          <div class="col-10 d-flex justify-content-center align-item-center">
            <div class="card-body">
              <div class="text-center" style="font-size: 13px; font-weight: 600">
                  {{session()->get('message')}}
              </div>
              <div class="text-center" style="font-size: 12px">
                Please wait for the confirmation.
              </div>
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center align-item-center">
            <button type="button" data-bs-dismiss="alert" aria-label="Close" class="btn py-0 px-2 mb-0 shadow-none">
              <i class="fa-solid fa-xmark text-lg"></i>
            </button>      
          </div>
        </div>
      </div>
    </div>
    @endif

    </div>
    <script>
      window.setTimeout(function () {
          $("#dismiss")
              .fadeIn(3000, 1)
              .fadeOut(5000, function () {
                  $(this).remove();
              });
        }, 2000);
    </script>
    <script>
    var dateToday = new Date();
        $( function() {
          $("#datepicker").datepicker({
              dateFormat:"yy-mm-dd",
              showButtonPanel:false,
              numberOfMonths:1,
              minDate:dateToday,
          });
      });
    </script>
  </body>

  @stack('modals')

  @livewireScripts
</html>
