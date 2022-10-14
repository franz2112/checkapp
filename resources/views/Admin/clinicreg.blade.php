<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link sizes="76x76" rel="icon" type="image/png" href="../assets/admin/img/CheckappLogo.png" />
    <title>{{ config('app.name', 'CheckApp') }}</title>
        
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link href="../assets/admin/css/nucleo-svg.css" rel="stylesheet" />

    @vite([
        'public/assets/admin/css/soft-ui-dashboard.css?v=1.0.6"', 
        
        'public/assets/admin/js/soft-ui-dashboard.js', 
          
        'public/assets/vendor/all.js'
         ])
      
      @livewireStyles
  </head>

  <body class="g-sidenav-show bg-gray-100">
    
    @if (session()->has('message'))
        <div class="alert alert-dismissible fade show" role="alert">
            <div class="card z-index-2 position-fixed bottom-0 end-0 p-0 m-3 shadow-lg">
                <div class="card-header bg-primary py-3">
                    <div class="row">
                        <div class="col-7 d-flex align-item-center">
                            <img src="../assets/admin/img/CheckApplogosm.png" class="rounded" alt="logo">
                            <span class="me-5 fw-bolder pt-1">CheckApp</span>
                        </div>
                        <div class="col-5 d-flex justify-content-end align-item-center">
                            <span class="text-white py-2 fst-italic pe-2" style="font-size: 12px">Just Now</span>
                            <button type="button" data-bs-dismiss="alert" aria-label="Close" class="btn py-2 px-2 mb-0 shadow-none"><i class="fa-solid fa-xmark text-lg text-white"></i></button>      
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="text-sm text-center">
                    {{session()->get('message')}}
                </div>
            </div>
            </div>
        </div>
    @endif

    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <section class="min-vh-100">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/doctor-gbfd96598f_19210.jpg');">
                <span class="mask bg-gradient-primary opacity-3"></span>
                <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-5 text-center mx-auto ">
                        <h1 class="text-white mb-2">Welcome!</h1>
                        <p class="text-lead text-white">Embrace health through digital technology. Conduct consultation anytime, anywhere,</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-6 col-lg-5 col-md-7 mx-auto">
                    
                    <form method="POST" action="{{url('upload-clinics') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card z-index-0 shadow-lg">
                            <div class="card-header text-center pt-4">
                                <h5>Register as a Clinic</h5>
                                <p>Please fill out the following information.</p>
                            </div>
                        
                            <div class="card-body pt-0 text-primary ">
                                <form role="form text-left">
                                    <div class="form-floating mb-2">
                                        <input type="name" name="clinicname" class="form-control" id="floatingInput" placeholder="clinic name" required>
                                        <label for="floatingInput" class="text-secondary ">Clinic's Name</label>
                                    </div>
                                    
                                    <div class="form-floating mb-2">
                                        <input type="name" name="ofname" class="form-control" id="floatingInput" placeholder="ofname" required>
                                        <label for="floatingInput" class="text-secondary ">Owner's First Name</label>
                                    </div>
                                    
                                    <div class="form-floating mb-2">
                                        <input type="name" name="olname" class="form-control" id="floatingInput" placeholder="olname" required>
                                        <label for="floatingInput" class="text-secondary ">Owner's Last Name</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input type="name" name="caddress" class="form-control" id="floatingInput" placeholder="olname" required>
                                        <label for="floatingInput" class="text-secondary ">Address</label>
                                    </div>
                                
                                    <div class="form-floating mb-2">
                                        <input type="email" name="cemail" class="form-control" id="floatingInput" placeholder="email address" required>
                                        <label for="floatingInput" class="text-secondary ">Email Address</label>
                                    </div>
                                    
                                    <div class="form-floating mb-1">
                                        <input type="name" name="Ccontact" class="form-control" id="floatingInput" placeholder="Contact" required>
                                        <label for="floatingInput" class="text-secondary ">Contact Number</label>
                                    </div>
                                
                                    <div class="mb-1">
                                        <label for="file" class="form-label">Add Clinic Profile </label>
                                        <input type="file" name="Profile" class="form-control" id="file">                            
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="file" class="form-label">Clinic License</label>
                                        <input type="file" name="Proof" class="form-control" id="file">                            
                                    </div>
                                    
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" target="_blank" class="text-primary font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-2">Submit</button>
                                    </div>
                                    {{-- <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;" class="text-dark font-weight-bolder">Sign in</a></p> --}}
                                </form>
                            </div>
                        </div>
                    </form>    
                </div>
                </div>
            </div>
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="/welcome" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    CheckApp
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-youtube"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-facebook"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-google"></span>
                    </a>
                </div>
                </div>
                <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © 
                        <script>
                            document.write(new Date().getFullYear())
                        </script> CheckApp. All rights reserved.
                    </p>
                </div>
                </div>
            </div>
        </footer>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/admin/js/core/popper.min.js"></script>
    <script src="../assets/admin/js/core/bootstrap.min.js"></script>
    <script src="../assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/admin/js/plugins/chartjs.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
  
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <script>
        window.setTimeout(function () {
            $(".alert")
                .fadeTo(3000, 0)
                .slideUp(500, function () {
                    $(this).remove();
                });
        }, 2000);
    </script>
  </body>
  @stack('modals')

  @livewireScripts
</html>
