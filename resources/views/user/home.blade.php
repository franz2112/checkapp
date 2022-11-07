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
