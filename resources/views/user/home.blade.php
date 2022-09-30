<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>{{ config('app.name', 'CheckApp') }}</title>
    
    <link rel="shortcut icon" href="../assets/img/Checkapp logo 2.0.png" />
    
    <link rel="stylesheet" href="../assets/css/style.css"/>
   
    
    @vite(['public/assets/css/style.css', 'public/assets/css/style.css', 'public/assets/js/check.js'])
    
    @livewireStyles
</head>

  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="master-part">
      <!-- sidebar -->
      <aside class="sidebar-part">
        <ul>
          <div class="main-title-page py-4 px-3">
            <a href="#" class="nav-title">
              <img src="../assets/img/Checkapp logo 2.0.png" alt="logo" />
              <span class="links-name text-black">Check</span>
              <span class="links-name">App</span>
            </a>
          </div>
          <li class="nav-item active">
            <!-- "active" for active Home -->
            <a href="index.html" class="home-nav">
              <i class="icons fa-solid fa-house px-2"></i>
              <span class="links-name">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <!-- "active - clinic" for active Clinic -->
            <a href="/pages/clinic.html" class="side-nav-clinic">
              <i class="fa-brands fa-medrt px-3"></i>
              <span class="links-name">Clinics</span>
            </a>
          </li>
          <li class="nav-item">
            <!-- "active - appoint" for active Appointment -->
            <a href="/pages/appointment.html" class="side-nav-appoint">
              <i class="fa-solid fa-pen px-3"></i>
              <span class="links-name">Appointments</span>
            </a>
          </li>
          <li class="nav-item">
            <!-- "active - notif" for active notification-->
            <a href="/pages/notification.html" class="side-nav-notif">
              <i class="fa-solid fa-message px-3"></i>
              <span class="links-name">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <!-- "active - Rec" for active Records-->
            <a href="/pages/records.html" class="side-nav-rec">
              <i class="fa-solid fa-file-prescription px-3"></i>
              <span class="links-name">Records</span>
            </a>
          </li>

          <!-- All navlower, the active is "active-lower" -->
          <li class="pt-5 nav-lower">
            <a href="#" class="side-nav-lower">
              <i class="icons fa-solid fa-gear px-3"></i>
              <span class="links-name">Settings</span>
            </a>
          </li>
          <li class="nav-lower">
            <a href="#" class="side-nav-lower">
              <i class="icons fa-solid fa-circle-question px-3"></i>
              <span class="links-name">Help</span>
            </a>
          </li>
          <form method="POST" action="{{ route('logout') }}" x-data>
            <li class="nav-lower">
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="side-nav-out" >
                    <i
                    class="icons fa-solid fa-arrow-right-from-bracket px-3"
                    data-fa-transform="flip-h"
                    ></i>
                    <span class="links-name">{{ __('Log Out') }}</span>
                </a>
            </li>
          </form>
        </ul>
      </aside>
      <!-- sidebar ends -->
      <!-- body part -->
      <div class="body-part">
        <div class="container">
          <!-- header -->
          
          <nav class="navbar navbar-expand-lg py-4 px-lg-5 ">
            <div class="container-fluid d-block">
                  <div class="d-lg-none">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="rounded-circle" alt="Avatar">             
                    </button>
                    <div id="navbarCollapse" class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav me-auto">
                          <li class="nav-item py-3">user@gmail.com</li>
                          <li><hr></li>
                          <li class="nav-item"><a class="nav-link" href="#">Another action</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Something else here</a></li>
                        </ul>
                    </div>
                  </div>
                  
                  <div class="d-none d-lg-block">
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div >
                      <ul class="navbar-nav navbar-right d-flex justify-content-end">
                        <li class="dropdown"> 
                          <a href="#" data-bs-toggle="dropdown" class="">Paula Wilson <img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="rounded-circle" alt="Avatar"></a>
                          <ul class="dropdown-menu shadow-lg">
                            <li class="px-3 py-1 text-center"><span>Manage Account</span> </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li> </ul>
                        </li>
                      </ul>
                    </div>
                  </div>

          
            </div>
          </nav>
          <!-- header end -->
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

      <!-- footer -->
      <footer>
        CheckApp © 2022
        <button
          class="navbar-toggler float-end"
          type="button"
          data-bs-toggle="collapse"
          href="#navbarSupport"
          aria-controls="navbarSupport"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="padding-top: 3px"
        >
          <span class="fa-solid fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="foot-link">About us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="foot-link">Terms of Use</a>
            </li>
            <li class="nav-item">
              <a href="#" class="foot-link">Support</a>
            </li>
            <li class="nav-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
  </body>
  <script src="../assets/vendor/all.js"></script>
  <script src="../assets/vendor/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/jquery.min.js"></script>
  <script src="../assets/js/check.js"></script>
</html>
