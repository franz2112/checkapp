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
          
          <!-- nav -->
          @include('user.separated.nav')
          <!-- nav end -->

          <div class="main-content">
            <div class="content-wrapper px-5">
              <div class="row">
                <div class="col-lg-4 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Advertisement</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card one-part">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Latest Result</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card one-part">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Explore Clinics</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card calendars">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Calendar</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card two-part">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Upcoming Schedule</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="hover-design">
                    <div class="card two-part">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              <h6 class="mb-0">Notifications</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
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

  {{-- <script src="../assets/vendor/all.js"></script> --}}
  {{-- <script src="../assets/vendor/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/jquery.min.js"></script> --}}
  {{-- <script src="../assets/vendor/popper.min.js"></script> --}}
  {{-- <script src="../assets/js/check.js"></script> --}}
  @stack('modals')

  @livewireScripts
</html>
