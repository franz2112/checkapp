<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name', 'CheckApp') }}</title>

    <link rel="shortcut icon" href="../assets/img/Checkapp logo 2.0.png" />

    <link rel="stylesheet" href="../assets/css/style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    @vite([ 'public/assets/css/style.css', 'public/assets/js/check.js',
    'public/assets/vendor/all.js' ]) @livewireStyles
  </head>

  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="master-part">
      <!-- body part -->
      <div class="body-part">
        <div class="container-fluid px-md-5">
          <!-- nav part -->
          <nav class="py-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center p-lg-0">
                <div class="main-title-page">
                  <a href="/" class="">
                    <img src="../assets/img/CheckappLogo.png" alt="logo" />
                    <span class="links-name text-black">Check</span>
                    <span class="links-name">App</span>
                  </a>
                </div>
              </div>
              <div
                class="col-6 d-flex align-items-center flex-row-reverse p-lg-0"
              >
                <ul class="m-0">
                  <li class="dropdown">
                    <div
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      data-bs-display="static"
                      class=""
                    >
                      <img
                        class="rounded-circle img-thumbnail"
                        src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->fname) }}&rounded=true&background=random&length=1&size=32px&color=ff000"
                        alt=""
                      />
                      <span class="ps-1">
                        {{ Auth::user()->fname}} {{ Auth::user()->mname}} {{
                        Auth::user()->lname}}
                      </span>
                      <i class="ps-2 fa-solid fa-angle-down"></i>
                    </div>
                    <ul
                      class="dropdown-menu dropdown-menu-end shadow-lg"
                      style="width: 225px; font-size: 14px"
                    >
                      <li
                        class="px-3 py-1 text-center fw-light"
                        style="font-size: 12px"
                      >
                        <span>Manage Account</span>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ url('Appointment') }}"
                          >Appointments</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="{{ route('profile.show') }}"
                        >
                          {{ __('Profile') }}</a
                        >
                      </li>
                      <li><a class="dropdown-item" href="#">Privacy</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li class="px-3 py-1 text-truncate">
                        <i class="fa-solid fa-globe pe-2"></i> Location
                      </li>
                      <li><hr class="dropdown-divider" /></li>
                      <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <li class="dropdown-item">
                          <a
                            href="{{ route('logout') }}"
                            @click.prevent="$root.submit();"
                            class="text-danger"
                          >
                            <i
                              class="icons fa-solid pe-2 fa-arrow-right-from-bracket"
                              data-fa-transform="flip-h"
                            ></i>
                            <span class="links-name">{{ __('Log Out') }}</span>
                          </a>
                        </li>
                      </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- header end -->
          <div class="content-wrapper">
            <div class="row">
              <section class="section-50">
                <div class="container">
                  <h3 class="m-b-50 heading-line">
                    Notifications <i class="fa fa-bell text-muted"></i>
                  </h3>

                  <div class="notification-ui_dd-content">
                    <div class="notification-list notification-list--unread">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user1.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>John Doe</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random1.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                    <div class="notification-list notification-list--unread">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user2.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Richard Miles</b> liked your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img src="https://picsum.photos/200/300?random=2">
                      </div>
                    </div>
                    <div class="notification-list">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user3.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Brian Cumin</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random3.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                    <div class="notification-list">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user4.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Lance Bogrol</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random4.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                    <div class="notification-list">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user1.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Parsley Montana</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random1.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                    <div class="notification-list">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user3.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Brian Cumin</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random3.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                    <div class="notification-list">
                      <div class="notification-list_content">
                        <div class="notification-list_img">
                          <img src="images/users/user2.jpg" alt="user" />
                        </div>
                        <div class="notification-list_detail">
                          <p><b>Lance Bogrol</b> reacted to your post</p>
                          <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Unde, dolorem.
                          </p>
                          <p class="text-muted"><small>10 mins ago</small></p>
                        </div>
                      </div>
                      <div class="notification-list_feature-img">
                        <img
                          src="images/features/random2.jpg"
                          alt="Feature image"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="#!" class="dark-link">Load more activity</a>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
      <!-- Body part-->

      {{-- footer --}} @include('user.separated.footer') {{-- footer end --}}
    </div>
    <script>
      window.setTimeout(function () {
        $("#dismiss")
          .fadeIn(3000, 1)
          .fadeOut(5000, function () {
            $(this).remove();
          });
      }, 2000);
    </script>
  </body>

  @stack('modals') @livewireScripts
</html>
