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
      <!-- sidebar -->
      @include('user.separated.aside')
      <!-- sidebar ends -->
      <!-- body part -->
      <div class="body-part">
        <div class="container">
        <!-- header -->

        <!-- nav -->
        @include('user.separated.nav')
        <!-- nav end -->

        <!-- header end -->
          <div class="main-content">
            <div class="content-wrapper px-5">
              <div class="nav-search">
                <div class="nav-appoint">
                  <ul
                    class="nav-own nav-pills mb-3"
                    id="pills-tab"
                    role="tablist"
                  >
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active me-5"
                        id="pills-latest-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-latest"
                        type="button"
                        role="tab"
                        aria-controls="pills-latest"
                        aria-selected="true"
                      >
                        <i class="fa-regular fa-file-lines fa-lg"></i>
                        <span class="text">Latest</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-5"
                        id="pills-Approved-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-Approved"
                        type="button"
                        role="tab"
                        aria-controls="pills-Approved"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-clipboard-check fa-lg"></i>
                        <span class="text">Approved</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-5"
                        id="pills-Pending-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-Pending"
                        type="button"
                        role="tab"
                        aria-controls="pills-Pending"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-spinner fa-lg"></i>
                        <span class="text">Pending</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-5"
                        id="pills-cancelled-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-cancelled"
                        type="button"
                        role="tab"
                        aria-controls="pills-cancelled"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-file-excel fa-lg"></i>
                        <span class="text">Cancelled</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-5"
                        id="pills-history-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-history"
                        type="button"
                        role="tab"
                        aria-controls="pills-history"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-clock-rotate-left fa-lg"></i>
                        <span class="text">History</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- nav-end -->
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-latest"
                  role="tabpanel"
                  aria-labelledby="pills-latest-tab"
                  tabindex="0"
                >
                    <div class="row">
                        @foreach ($dataAppoints as $appoints)
                        <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                        <div class="card-appoint">
                            <div class="header">
                            <div class="row">
                                <div class="col-6">
                                <img src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}" alt="" />
                                </div>
                                <div class="col-6">
                                <div class="cover">
                                  @if ($appoints->status=='Approved')
                                    <span class="active">Approved</span>
                                  @elseif ($appoints->status=='pending')
                                    <span class="pending">Pending</span>
                                  @else
                                    <span class="cancel">Cancelled</span>
                                  @endif
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="body">
                              <h6 class=" mb-0 text-uppercase text-truncate pe-2">{{$appoints->clinic->clinicname}}</h6>
                              <span>
                                  <p>{{$appoints->doctor}}</p>
                              </span>
                              <span>
                                  <p>{{$appoints->Consultatio}}</p>
                              </span>
                              <span>
                                  <p>{{$appoints->date}} | {{$appoints->time}}</p>
                              </span>
                            <span>
                              @if ($appoints->status=='Approved')
                                <a href="#" class="btn view">View Details</a>
                              @elseif ($appoints->status=='pending')
                                <a href="{{ url('Cancel-appoint', $appoints->id) }}" class="btn cancel">
                                  Cancel Appointment
                                </a>                              
                              @elseif ($appoints->status=='Declined')
                                <a href="#" class="btn view">View Details</a>
                              @endif
                            </span>
                            </div>
                        </div>
                        </div>

                        {{-- <div class="col-xl-4 col-lg-6 py-3 wow zoomIn">
                        <div class="card-appoint">
                            <div class="header">
                            <div class="row">
                                <div class="col-6">
                                <img src="../assets/images/doc.jpg" alt="" />
                                </div>
                                <div class="col-6">
                                <div class="cover">
                                    <span class="pending">Pending</span>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="body">
                            <h5 class="text-xl mb-0">EXAMPLE CLINIC NAME</h5>
                            <span>
                                <p>Doctor Name</p>
                            </span>
                            <span>
                                <p>Face-to-face Consultation</p>
                            </span>
                            <span>
                                <p>August 1, 2022 | 10:30 AM</p>
                            </span>
                            <span>
                                <a href="#" class="btn cancel">
                                Cancel Appointment
                                </a>
                            </span>
                            </div>
                        </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 py-3 wow zoomIn">
                        <div class="card-appoint">
                            <div class="header">
                            <div class="row">
                                <div class="col-6">
                                <img src="../assets/images/doc.jpg" alt="" />
                                </div>
                                <div class="col-6">
                                <div class="cover">
                                    <span class="cancel">Cancelled</span>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="body">
                            <h5 class="text-xl mb-0">EXAMPLE CLINIC NAME</h5>
                            <span>
                                <p>Doctor Name</p>
                            </span>
                            <span>
                                <p>Face-to-face Consultation</p>
                            </span>
                            <span>
                                <p>August 1, 2022 | 10:30 AM</p>
                            </span>
                            <a href="#" class="btn view">View Details</a>
                            </div>
                        </div>
                        </div> --}}
                        @endforeach
                    </div>                    
                </div>

                <!-- approved pane -->
                <div
                  class="tab-pane fade"
                  id="pills-Approved"
                  role="tabpanel"
                  aria-labelledby="pills-Approved-tab"
                  tabindex="0"
                >
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 py-3 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img src="../assets/images/doc.jpg" alt="" />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                <span class="active">Approved</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h5 class="text-xl mb-0">EXAMPLE CLINIC NAME</h5>
                          <span>
                            <p>Doctor Name</p>
                          </span>
                          <span>
                            <p>Face-to-face Consultation</p>
                          </span>
                          <span>
                            <p>August 1, 2022 | 10:30 AM</p>
                          </span>
                          <span>
                            <a href="#" class="btn view">View Details</a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- pending pane -->
                <div
                  class="tab-pane fade"
                  id="pills-Pending"
                  role="tabpanel"
                  aria-labelledby="pills-Pending-tab"
                  tabindex="0"
                >
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 py-3 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img src="../assets/images/doc.jpg" alt="" />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                <span class="pending">Pending</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h5 class="text-xl mb-0">EXAMPLE CLINIC NAME</h5>
                          <span>
                            <p>Doctor Name</p>
                          </span>
                          <span>
                            <p>Face-to-face Consultation</p>
                          </span>
                          <span>
                            <p>August 1, 2022 | 10:30 AM</p>
                          </span>
                          <span>
                            <a href="#" class="btn cancel">
                              Cancel Appointment
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- cancelled -->
                <div
                  class="tab-pane fade"
                  id="pills-cancelled"
                  role="tabpanel"
                  aria-labelledby="pills-cancelled-tab"
                  tabindex="0"
                >
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 py-3 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img src="../assets/images/doc.jpg" alt="" />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                <span class="cancel">Cancelled</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h5 class="text-xl mb-0">EXAMPLE CLINIC NAME</h5>
                          <span>
                            <p>Doctor Name</p>
                          </span>
                          <span>
                            <p>Face-to-face Consultation</p>
                          </span>
                          <span>
                            <p>August 1, 2022 | 10:30 AM</p>
                          </span>
                          <span>
                            <a href="#" class="btn view">View Details</a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-history"
                  role="tabpanel"
                  aria-labelledby="pills-history-tab"
                  tabindex="0"
                >
                  History
                </div>
              </div>
            </div>
          </div>
          <!-- main content end -->
        </div>
      </div>
      <!-- Body part-->

        {{-- footer --}}
        @include('user.separated.footer')
        {{-- footer end --}}
    </div>
  </body>
  @stack('modals')

  @livewireScripts
</html>
