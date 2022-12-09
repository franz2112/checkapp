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

                <div class="notification-ui_dd-content">
                  <div class="notification-list notification-list--unread">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/500/500?random=2">
                      </div>
                      <div class="notification-list_detail">
                        <p><b>CinicName1</b> Approve your appointment</p>
                        <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>1 min ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                    </div>
                  </div>
                  <div class="notification-list notification-list--unread">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/200/300?random=2">
                      </div>
                      <div class="notification-list_detail">
                        <p><b>CinicName2</b> Message you</p>
                        <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                  </div>
                  </div>
                  <div class="notification-list">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/500/500?random=2">
                      </div>
                      <div class="notification-list_detail">
                          <p><b>CinicName1</b> Approve your appointment</p>
                          <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>1 week ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                  </div>
                  </div>
                  <div class="notification-list">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/200/300?random=2">
                      </div>
                      <div class="notification-list_detail">
                          <p><b>CinicName2</b> Reschedule your appointment</p>
                          <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>2 months ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                    </div>
                  </div>
                  <div class="notification-list">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/200/300?random=2">
                      </div>
                      <div class="notification-list_detail">
                          <p><b>CinicName2</b> Decline your appointment</p>
                        <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>8 months ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                  </div>
                  </div>
                  <div class="notification-list">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/500/500?random=2">
                      </div>
                      <div class="notification-list_detail">
                          <p><b>CinicName1</b> Approve your appointment</p>
                        <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>8 months ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                  </div>
                  </div>
                  <div class="notification-list">
                    <div class="notification-list_content">
                      <div class="notification-list_img">
                          <img src="https://picsum.photos/100/300?random=2">
                      </div>
                      <div class="notification-list_detail">
                          <p><b>CinicName3</b> Message you</p>
                        <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Unde, dolorem.
                        </p>
                        <p class="text-muted"><small>10 months ago</small></p>
                      </div>
                    </div>
                    <div class="notification-list_feature-img">
                      <a href="#" class="btn view">View Details</a>
                  </div>
                  </div>
                </div>

                <div class="text-center">
                  <a href="#!" class="dark-link">Load more activity</a>
                </div>
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
