<!DOCTYPE html>
<html lang="en">
  @section('title') 
   Notifications |  
  @endsection

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
          <!-- header -->

          <!-- nav -->
          @include('user.separated.nav')
          <!-- nav end -->

          <!-- header end -->
          <div class="main-content">
            <div class="content-wrapper px-5">
              <section class="section-50 pt-2 ">
                <h3 class="m-b-50 heading-line">
                  Notifications <i class="fa fa-bell text-muted"></i>
                </h3>
                <div class="container">
                  @foreach ( $appointments as $a )
                  <div class="notification-ui_dd-content">
                    <div class="notification-list notification-list--unread">
                      <div class="notification-list_content">
                        <div class="notification-list_img pt-2">
                            <img src="/../assets/admin/img/clinicimage/{{ $a->clinic->Profile}}" >
                        </div>
                        <div class="notification-list_detail pt-3">
                          <p><b>{{ $a->clinic->clinicname}}</b> {{ $a->status }} your appointment</p>
                          {{-- <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p> --}}
                          <p class="text-muted"><small>{{ date('F d, Y', strtotime($a->created_at)) }}</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img pt-2">
                        <a href="{{ url('user/appointment') }}" class="btn view">View Details</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                {{-- <div class="text-center">
                  <a href="#!" class="dark-link">Load more activity</a>
                </div> --}}
            </section>
            </div>
          </div>
          <!-- main content end -->



        </div>
      </div>
      <!-- Body part-->

      {{-- footer --}} @include('user.separated.footer') {{-- footer end --}}
    </div>
  </body>
  @stack('modals') @livewireScripts
</html>
