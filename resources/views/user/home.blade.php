<!DOCTYPE html>
<html lang="en">

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
              <div class="row">
                <div class="col-lg-4 grid-margin">
                  <a href="#" class="hover-design">
                    <div class="card">
                      <div class="card-body"
                      style="background-image:url(//../assets/img/Advertisment.gif);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center; 
                      ">
                        <div class="row">
                          <div class="col-12">
                            <div
                              class="d-flex align-items-center align-self-start"
                            >
                              {{-- <img src="/../assets/img/Advertisment.gif" alt="logo" /> --}}
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
                      <div class="card-body"
                      >
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
                      <div class="card-body"
                      style="background-image:url(//../assets/img/Explore_Clinics.gif);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center; 
                      "
                      >
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
                      <div id="datepicker"></div>
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

  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
    <style>
      .ui-widget.ui-widget-content{
        min-width: 100%;
      }
      .ui-datepicker table{
        height: 230px;
      }
      .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight{
        background-color: #8ed79e;
        border: 1px solid #8ed79e;
        color: #000000;
      }
      .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover{
        border: 1px solid #35bf53;
        background: #35bf53;
        font-weight: normal;
        color: #ffffff;
      }

    </style>
  {{-- <script src="../assets/vendor/all.js"></script> --}}
  {{-- <script src="../assets/vendor/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/jquery.min.js"></script> --}}
  {{-- <script src="../assets/vendor/popper.min.js"></script> --}}
  {{-- <script src="../assets/js/check.js"></script> --}}
  @stack('modals')

  @livewireScripts
</html>
