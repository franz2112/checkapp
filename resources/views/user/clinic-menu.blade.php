<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>{{ config('app.name', 'CheckApp') }}</title>
        
        <link rel="shortcut icon" href="../assets/img/Checkapp logo 2.0.png" />
        
        <link rel="stylesheet" href="../assets/css/style.css"/>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
        @vite([
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
                      <li><a class="dropdown-item" href="{{ url('Appointment') }}">Appointments</a></li>
                      <li><a class="dropdown-item" href="{{ route('profile.show') }}"> {{ __('Profile') }}</a></li>
                      <li><a class="dropdown-item" href="#">Privacy</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li class="px-3 py-1 text-truncate"><i class="fa-solid fa-globe pe-2"></i> Location</li>
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
                            <form  method="POST" action="{{ url('Request-Appointment', $clinics->id) }}" id="style-2" class="form py-0" " enctype="multipart/form-data">
                              @csrf
                              <!-- Progress bar -->
                              <div class="progressbar mt-1">
                                <div
                                  class="progress progress-bar progress-bar-striped progress-bar-animated"
                                  id="progress"
                                ></div>

                                <div class="progress-step p-active"></div>
                                <div class="progress-step"></div>
                                <div class="progress-step"></div>
                                <div class="progress-step"></div>
                              </div>

                              <!-- Steps -->
                              <div class="form-step f-active">
                                {{-- error --}}
                                <p id="output" class="my-2 text-danger"></p>

                                {{-- date --}}
                                <div class="row mb-1">
                                <div class="col-md-6">
                                  <h6 class="mt-2">Select Date</h6>
                                  {{-- <div class="container-cl">
                                    <div class="calendar">
                                      <div class="month">
                                        <span class="prev">
                                          <i
                                            class="fa-solid fa-angle-left"
                                          ></i>
                                        </span>
                                        <div class="date">
                                          <h1></h1>
                                          <p class="mb-0"></p>
                                        </div>
                                        <span class="next">
                                          <i
                                            class="fa-solid fa-angle-right"
                                          ></i>
                                        </span>
                                      </div>
                                      <div class="weekdays">
                                        <div>Sun</div>
                                        <div>Mon</div>
                                        <div>Tue</div>
                                        <div>Wed</div>
                                        <div>Thu</div>
                                        <div>Fri</div>
                                        <div>Sat</div>
                                      </div>
                                      <div class="days"></div>
                                    </div>
                                  </div> --}}
                                  <input type="date" name="date" class="form-select form-select-sm mb-3" required="required">
                                </div>
                                <div class="col-md-6">
                                  <h6 class="mt-2">Select Time</h6>
                                  <select
                                    class="form-select form-select-sm mb-3"
                                    aria-label=".form-select-lg example"
                                    name="time"
                                  >
                                    <option selected>8:00 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="01:00 PM">01:00 PM</option>
                                    <option value="02:00 PM">02:00 PM</option>
                                    <option value="03:00 PM">03:00 PM</option>
                                  </select>
                                </div>
                              </div>
                              

                                <div class="ms-4">
                                  <a
                                    id="btn"
                                    type="submit"
                                    class="btn btn-next width-50 ml-auto"
                                  >
                                    Next
                                  </a>
                                </div>
                              </div>

                              <div class="form-step">

                                {{-- error --}}
                                <p id="output" class="my-2 text-danger"></p>

 
                                
                                <h6 class="mt-2" for="doctor">Select Doctor</h6>
                                <div class="input-group">
                                  <div class="row m-0">
                                    @foreach ($dataDoctors as $doctors)
                                      <div class="col-sm-6 p-0">
                                        <div class="option m-1">
                                          <input
                                            type="radio"
                                            name="doctor"
                                            id="Doctor{{ $doctors->Dlname }}"
                                            value="Doctor{{ $doctors->Dlname }}"
                                          />
                                          <label
                                            class="label-d" 
                                            for="Doctor{{ $doctors->Dlname }}"
                                            aria-label="Doctor{{ $doctors->Dlname }}"
                                          >
                                            <span></span>
                                            <div class="row">
                                              <div class="d-block text-truncate"
                                              style="min-width: 150px;">
                                                Doc {{ $doctors->Dlname }}
                                              </div>
                                              <div class="d-block text-truncate"
                                              style="min-width: 150px;">
                                                {{ $doctors->Specialization }}
                                              </div>
                                            </div>

                                            <div
                                              class="card card--white card--sm"
                                            >
                                              <img
                                                src="/assets/admin/img/doctorimage/{{ $doctors->file }}"
                                                alt=""
                                              />
                                            </div>
                                          </label>
                                        </div>
                                      </div>
                                    @endforeach
                                    {{-- suggest --}}
                                    <div class="col-sm-6 p-0">
                                      <div class="option m-1">
                                        <input
                                          type="radio"
                                          name="doctor"
                                          id="suggest"
                                          value="suggest"
                                        />
                                        <label
                                          class="label-d" 
                                          for="suggest"
                                          aria-label="suggest"
                                        >
                                          <span></span>
                                            <div class="d-block text-truncate"
                                            style="min-width: 150px;">
                                              Suggest Doctor
                                            </div>
                                          <div
                                            class="card card--white card--sm"
                                          >
                                            <img
                                              src="/assets/admin/img/blmkl.png"
                                              alt=""
                                            />
                                          </div>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <h6 for="consultation" class="mt-2">
                                  Select Consultation Type
                                </h6>
                                <div class="input-group">
                                  <div class="row m-0">
                                    <div class="col-sm-6 p-0">
                                      <div class="option m-1">
                                        <input
                                          type="radio"
                                          name="consultation"
                                          id="ol"
                                          value="Online"
                                          required
                                        />
                                        <label
                                          class="label-d"
                                          for="ol"
                                          aria-label="ol"
                                        >
                                          <span></span>

                                          Online Consultation

                                          <div
                                            class="card card--white card--sm"
                                          >
                                            <img
                                              src="/assets/img/noun-medical-check-up-2583365.png"
                                              alt=""
                                            />
                                          </div>
                                        </label>
                                      </div>
                                    </div>

                                    <div class="col-sm-6 p-0">
                                      <div class="option m-1">
                                        <input
                                          type="radio"
                                          name="consultation"
                                          id="f2f"
                                          value="Face-to-Face"
                                        />
                                        <label
                                          class="label-d"
                                          for="f2f"
                                          aria-label="f2f"
                                        >
                                          <span></span>
                                          <p>Face-to-Face Consultation</p>
                                          <div
                                            class="card card--white card--sm"
                                          >
                                            <img
                                              src="/assets/img/noun-face-to-face-4877515.png"
                                              alt=""
                                            />
                                          </div>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="btns-group">
                                  <a href="#" class="btn btn-prev">Back</a>
                                  <a href="#" class="btn btn-next">Next</a>
                                </div>
                              </div>

                              <div class="form-step">
                                <div class="row">
                                  <div class="col-12">
                                    <h6 class="my-4">Reason/Complaints</h6>
                                    <textarea
                                      class="form-control my-3"
                                      rows="8"
                                      id="comment"
                                      name="reason"
                                      placeholder="Add message here"
                                      style="font-size: 13px"
                                    ></textarea>
                                  </div>
                                </div>
                                <div class="btns-group">
                                  <a href="#" class="btn btn-prev">Back</a>
                                  <a href="#" class="btn btn-next">Next</a>
                                </div>
                              </div>

                              <div class="form-step">
                                <div class="input-group">
                                  <div class="row">
                                    <div class="col-12">
                                      <h6 class="my-3">Attach ID</h6>
                                      <p>
                                        Upload special ID for special rate.
                                        (Senior Citizen, PWD, etc. e.g)
                                      </p>

                                      <input
                                        class="form-control"
                                        type="file"
                                        id="formFile"
                                        name="specialId"
                                      />
                                    </div>
                                    <div class="col-12">
                                      <h6 class="my-3">Terms and Condition</h6>
                                      <div class="d-flex">
                                        <input id="checkbox" type="checkbox" />
                                        <label for="checkbox">
                                          <p class="mx-3 my-0">
                                            I have read, understood, and
                                            accepted the
                                            <a href="#" style="color: #35bf53"
                                              >Terms & Conditions</a
                                            >
                                            and
                                            <a href="#" style="color: #35bf53"
                                              >Privacy Policy</a
                                            >
                                          </p>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="btns-group mt-3">
                                  <a href="#" class="btn btn-prev">Back</a>
                                  <input
                                    type="submit"
                                    value="Submit"
                                    class="btn"
                                  />
                                </div>
                              </div>
                            </form>
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
                      <a href="/clinics">
                        <div class="find-new-btn">Find New Clinic</div>
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
  </body>

  @stack('modals')

  @livewireScripts
</html>
