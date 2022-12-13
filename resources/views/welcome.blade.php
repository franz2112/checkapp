<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="copyright" content="" />

    <title>{{ config('app.name', 'CheckApp') }}</title>

    <link
      rel="icon"
      href="/assets/img/Checkapp logo 2.0.png"
      type="image/x-icon"
    />

    <!--     Fonts and icons     -->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
    rel="stylesheet" />
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    

    <link
      rel="stylesheet"
      href="../assets/vendor/owl-carousel/css/owl.carousel.css"
    />

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    {{-- <link rel="stylesheet" href="../assets/css/theme.css" /> --}}

     <!-- Scripts -->
     @vite([
      'public/assets/css/theme.css', 
      'public/assets/css/all.css', 
      'public/assets/js/theme.js',
      'public/assets/js/all.js'
     ])

     <!-- Styles -->
     @livewireStyles
  </head>

  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      {{-- <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="site-info">
                <span>Want to establish clinic online?</span>
                <a href="{{ url('/clinic-register') }}"><u>Register Here</u></a>
              </div>
            </div>
            <div class="col-lg-4 text-end">
              <div class="social-mini-button">
                <a href="#"><span class="fa-brands fa-facebook-f"></span></a>
                <a href="#"><span class="fa-brands fa-twitter"></span></a>
                <a href="#"><span class="fa-brands fa-instagram"></span></a>
                <a href="#"><span class="fa-solid fa-envelope"></span></a>
              </div>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .topbar --> --}}

      <nav class="navbar navbar-expand-xl">
        <div class="container">
          
          <a class="navbar-brand" href="{{ url('/welcome') }}">
            <img
            class="navbar-brand1"
            src="../assets/img/Checkapp logo 2.0.png"/>
            Check
          <span class="text-primary">
            App
          </span></a>
         

          <!-- <form action="#">
                    <div class="input-group input-navbar">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form> -->

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            href="#navbarSupport"
            aria-controls="navbarSupport"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ms-auto">
              <!-- <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#ouroffers">Our Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#how-it-works">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page-price">Prices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page-footer">About us</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('login') }}" class="btn btn-primary ms-lg-3 rounded-pill" href="#"
                  >Login</a
                >
              </li>
            </ul>
          </div>
          <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
      </nav>
    </header>
    <!-- header ends -->

    <div class="page-hero">
      <div class="container wow zoomIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-items show-up">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="display-2">CheckApp</h1>
                      <h2>Web Application</h2>
                      <p>
                        Is a telemedicine system that allows you to set your appointments and consult to a licensed doctor at the tip of your fingertips. You can set have your consultation via video call conferencing or face-to-face consultation
                      </p>
                      <a href="{{ route('register') }}" class="btn btn-primary rounded-pill"
                        >Register</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-items">
                  <img src="../assets/img/Medical-prescription-bro.png"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section" id="ouroffers">
      <div class="container">
        <div class="offer-design">
          <h1 class="display-2">Our offers</h1>
          <div class="row justify-content-center">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <img class="offer-img" src="../assets/img/1.png" />
                <h5>Online Appointment</h5>
                <p>
                  No need to find a mobile number of the clinic of your choice and you don’t need to get in line just to set an appointment to a doctor. CheckAPP will allow you to set your appointment at your convenience E-Check up
                </p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <img class="offer-img" src="../assets/img/2.png" />
                <h5>E-Check up</h5>
                <p>
                  CheckAPP offers an E-check up feature or virtual consultation. The system will let you choose whether what kind of consultation will you choose, either virtual or face-to-face. This will allow you to stay at your home while having a check up to avoid also the contraction of the Covid 19 virus.
                </p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <img class="offer-img" src="../assets/img/3.png" />
                <h5>E-Result and Prescription</h5>
                <p>
                  The system also allows you to have a copy of your prescription and medical results on a soft copy which means you can a soft copy of your medical results on your notification area of your dashboard for your convenience
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- .page-section -->

    <div class="page-works pb-0" id="how-it-works">
      <div class="container">
        <h1 class="display-2">How it Works</h1>
        <div class="owl-carousel owl-theme wow fadeInUp" id="doctorSlideshow">
          <div class="item">
            <div class="left-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img src="../assets/img/landing/reg.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                  <div class="work-content">
                    <h2 class="display-5">Register</h2>
                    <p class="text-grey mb-2">
                      To Register, Fill out all the necessary information about yourself, and create a strong password for your account details, and hit the register button
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                  <div class="work-content">
                    <h2 class="display-5">Home</h2>
                    <p class="text-grey mb-2">
                      Our system uses a user-friendly interface designed for users to easily navigate through the system's services and features. The home page displays a summary of data for the user to easily see. 
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img src="../assets/img/landing/home.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="left-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img
                        src="../assets/img/landing/slctclnc.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                  <div class="work-content">
                    <h2 class="display-5">Select Clinics</h2>
                    <p class="text-grey mb-2">
                      The "clinics" page displays all registered clinics under CheckAPP. Doctors registered under specific clinics can be seen at the clinics page. The page also displays all registered clinics' basic information such as name and contact information.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="left-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img src="../assets/img/landing/set.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                  <div class="work-content">
                    <h2 class="display-5">Set an Appointment</h2>
                    <p class="text-grey mb-2">
                      Easily set your appointment in the "appointment" page. Simply specify your preferred clinic, doctor, date and time to your convenience.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                  <div class="work-content">
                    <h2 class="display-5">Notifications</h2>
                    <p class="text-grey mb-2">
                      Easily see through your notification with the systems dedicated "Notification" page. Notifications such as appointments being approved, declined and rescheduled, and personally sent messages can be seen through the notification page.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img src="../assets/img/landing/notif.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="left-part-img">
              <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight">
                  <div class="work-content">
                    <div class="img-place custom-img-1">
                      <img
                        src="../assets/img/landing/records.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                  <div class="work-content">
                    <h2 class="display-5">Records</h2>
                    <p class="text-grey mb-2">
                      The records table displays information about the set appointments. Details such as the appointment's assigned doctor, clinic, date and time could be seen through the record page.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .bg-light -->
    <!-- .bg-light -->

    <div class="page-price"  id="page-price">
      <div class="container">
        <h1 class="text-center wow fadeInUp">
          Choose the price that’s right for you.
        </h1>
       
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="pricing-item-regular">
              <span class="price">$12</span>
              <h4>Standard Plan App</h4>
              <div class="icon">
                <img src="../assets/img/4040101.png" alt="" style="object-fit: cover"/>
              </div>
              <ul>
                <li>20 TB of Storage</li>
                <li class="non-function">Life-time Support</li>
                <li class="non-function">Premium Add-Ons</li>
                <li class="non-function">Fastest Network</li>
                <li class="non-function">More Options</li>
              </ul>
              <div class="card border-button">
                <a href="#">Purchase This Plan Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pricing-item-pro ">
              <span class="price">$25</span>
              <h4>Business Plan App</h4>
              <div class="icon">
                <img src="../assets/img/3594609.png" alt="" style="object-fit: cover" />
              </div>
              <ul>
                <li>50 TB of Storage</li>
                <li>Life-time Support</li>
                <li>Premium Add-Ons</li>
                <li class="non-function">Fastest Network</li>
                <li class="non-function">More Options</li>
              </ul>
              <div class="card border-button">
                <a href="#">Purchase This Plan Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pricing-item-regular">
              <span class="price">$66</span>
              <h4>Premium Plan App</h4>
              <div class="icon">
                <img src="../assets/img/TaeAugust11-[Converted].png" alt="" style="object-fit: cover"/>
              </div>
              <ul>
                <li>120 TB of Storage</li>
                <li>Life-time Support</li>
                <li>Premium Add-Ons</li>
                <li>Fastest Network</li>
                <li>More Options</li>
              </ul>
              <div class="card border-button">
                <a href="#">Purchase This Plan Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!-- .page-price -->

    <footer class="page-footer"  id="page-footer">
      <div class="page-about banner-home">
        {{-- <div class="container py-5 py-lg-0">
          <h1 class="wow fadeInUp text-primary display-4">About Us</h1>
          <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img
                    src="../assets/img/Shared from Lightroom mobile.jpg"
                    alt=""
                  />
                  <div class="meta">
                    <a href="Appointment.html" title="Appointment"
                      ><span class="fa-brands fa-facebook-f"></span
                    ></a>
                    <a href="#" title="Message"
                      ><span class="fa-brands fa-google"></span
                    ></a>
                  </div>
                </div>
                <div class="body">
                  <a href="#">
                    <p class="text-xl mb-0">Francis Michael</p>
                    <span class="text-sm text-grey">Solmayor</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/6 Fritz - Copy.JPG" alt="" />
                  <div class="meta">
                    <a href="Appointment.html" title="Appointment"
                      ><span class="fa-brands fa-facebook-f"></span
                    ></a>
                    <a href="#" title="Message"
                      ><span class="fa-brands fa-google"></span
                    ></a>
                  </div>
                </div>
                <div class="body">
                  <a href="#">
                    <p class="text-xl mb-0">Fritz</p>
                    <span class="text-sm text-grey">Tuazon</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/DSC_0236.JPG" alt="" />
                  <div class="meta">
                    <a href="Appointment.html" title="Appointment"
                      ><span class="fa-brands fa-facebook-f"></span
                    ></a>
                    <a href="#" title="Message"
                      ><span class="fa-brands fa-google"></span
                    ></a>
                  </div>
                </div>
                <div class="body">
                  <a href="#">
                    <p class="text-xl mb-0">Gil Jason</p>
                    <span class="text-sm text-grey">Tuna</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <!-- .banner-home -->

      <div class="page-footer-main" style="color: #26312f">
        <div class="container">
          <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Company</h5>
              <ul class="footer-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Editorial Team</a></li>
                <li><a href="#">Protection</a></li>

              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3" >
              <h5>More</h5>
              <ul class="footer-menu">
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Become a sponsor</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Our partner</h5>
              <ul class="footer-menu">
                <li><a href="{{ url('/clinic-register') }}" target="_blank">Register Clinic</a></li>
                <li><a href="{{ url('/clinic-register') }}" target="_blank">Login as Clinic</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Contact</h5>
              <p class="footer-link mt-2">
                351 Willow Street Franklin, MA 02038
              </p>
              <a href="#" class="footer-link">701-573-7582</a>
              <a href="#" class="footer-link">healthcare@temporary.net</a>

              <h5 class="mt-3">Social Media</h5>
              <div class="footer-sosmed mt-3">
                <a href="" target="_blank"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
                <a href="#" target="_blank"
                  ><span class="fa-brands fa-twitter"></span
                ></a>
                <a href="#" target="_blank"
                  ><span class="fa-brands fa-google"></span
                ></a>
                <a href="#" target="_blank"
                  ><span class="fa-brands fa-instagram"></span
                ></a>
                <a href="#" target="_blank"
                  ><span class="fa-brands fa-github"></span
                ></a>
              </div>
            </div>
          </div>

          <hr />

          <p id="copyright">
            Copyright &copy; 2022
            <a href="https://macodeid.com/" target="_blank"></a>. All right
            reserved
          </p>
        </div>
      </div>
    </footer>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    @livewireScripts
  </body>
</html>
