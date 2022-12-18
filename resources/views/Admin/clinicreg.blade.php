
<!DOCTYPE html>
<html lang="en">
    
@section('title') 
Clinic Registration |  
@endsection
    @include('Admin.Separated.header')
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
                                        <input type="name" class="form-control" id="floatingInput" placeholder="olname" value="Koronadal City" required disabled>
                                        <label for="floatingInput" class="text-secondary ">Clinc Address</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        {{-- <input type="name" name="caddress" class="form-control" id="floatingInput" placeholder="olname" required> --}}
                                        <label for="floatingPresc" class="text-secondary "></label>
                                        <select name="caddress" id="showings" class="form-control pb-1 pt-0 text-secondary text-center " placeholder="floatingPresc" required>
              
                                            <option>--Select Barangggay--</option> 
                                            <option value="Brgy. GPS Koronadal City">Brgy. GPS</option>
                                            <option value="Brgy. Sto. Niño Koronadal City">Brgy. Sto. Niño</option>
                                            <option value="Brgy. Zone I Koronadal City">Brgy. Zone I</option>
                                            <option value="Brgy. Zone II Koronadal City">Brgy. Zone II</option>
                                            <option value="Brgy. Zone III Koronadal City">Brgy. Brgy. Zone III</option>
                                            <option value="Brgy. Zone IV Koronadal City">Brgy. Brgy. Zone IV</option>
                                            <option value="Brgy. Assumption Koronadal City">Brgy. Brgy. Assumption</option>
                                            <option value="Brgy. Avanceña Koronadal City">Brgy. Avanceña</option>
                                            <option value="Brgy. Cacub Koronadal City">Brgy. Cacub</option>
                                            <option value="Brgy. Caloocan Koronadal City">Brgy. Caloocan</option>
                                            <option value="Brgy. Carpenter Hill Koronadal City">Brgy. Carpenter Hill</option>
                                            <option value="Brgy. Concepcion Koronadal City">Brgy. Concepcion</option>
                                            <option value="Brgy. Esperanza Koronadal City">Brgy. Esperanza</option>
                                            <option value="Brgy. Mabini Koronadal City">Brgy. Mabini</option>
                                            <option value="Brgy. Magsaysay Koronadal City">Brgy. Magsaysay</option>
                                            <option value="Brgy. Mambucal Koronadal City">Brgy. Mambucal</option>
                                            <option value="Brgy. Morales Koronadal City">Brgy. Morales</option>
                                            <option value="Brgy. Namnama Koronadal City">Brgy. Namnama</option>
                                            <option value="Brgy. New Pangasinan Koronadal City">Brgy. New Pangasinan</option>
                                            <option value="Brgy. Paraiso Koronadal City">Brgy. Paraiso</option>
                                            <option value="Brgy. Rotonda Koronadal City">Brgy. Rotonda</option>
                                            <option value="Brgy. San Isidro Koronadal City">Brgy. San Isidro</option>
                                            <option value="Brgy. San Jose Koronadal City">Brgy.San Jose</option>
                                            <option value="Brgy. San Roque Koronadal City">Brgy. San Roque</option>
                                            <option value="Brgy. Santa Cruz Koronadal City">Brgy. Santa Cruz</option>
                                            <option value="Brgy. Saravia Koronadal City">Brgy. Saravia</option>
                                            <option value="Brgy. Topland Koronadal City">Brgy. Topland</option>
                                        
                                            {{-- <option value="cardiology">Cardiology</option>
                                            <option value="neurology" disabled>Neurology</option>
                                            <option value="orthopaedics" disabled>Orthopaedics</option> --}}
                                        </select>
                                    </div>
                                
                                    <div class="form-floating mb-2" id="showing">
                                        <input type="text" name="street" class="form-control " id="floatingInput showing" placeholder="street" required>
                                        <label for="floatingInput" class="text-secondary" id="showing">Stree/Purok</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <input type="email" name="cemail" class="form-control" id="floatingInput" placeholder="email address" required>
                                        <label for="floatingInput" class="text-secondary ">Email Address</label>
                                    </div>
                                    
                                    <div class="form-floating mb-1">
                                        <input type="name" name="Ccontact" class="form-control" id="floatingInput" placeholder="Contact" maxlength="11" minlength="11" required>
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
    @section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#showing").hide();
            $("#showings").change(function(){
                if($(this).val().length > 0){
                    $("#showing").show();
                }
            });

        });
    </script>
    @endsection
    
    @include('Admin.Separated.script')

    <script type="text/javascript">
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
  
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <script type="text/javascript">
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
