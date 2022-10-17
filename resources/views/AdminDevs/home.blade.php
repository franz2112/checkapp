
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
        <link href="../assets/admin/css/nucleo-svg.css" rel="stylesheet" />
        <!-- jquery ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        @vite([
            'public/assets/admin/css/soft-ui-dashboard.css?v=1.0.6"', 
            
            'public/assets/admin/js/soft-ui-dashboard.js', 
              
            'public/assets/vendor/all.js'
             ])
          
        @livewireStyles
      </head>

  <body class="g-sidenav-show bg-gray-300">
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

    <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main"
    >
        <div class="sidenav-header">
        <i
            class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true"
            id="iconSidenav"
        ></i>
        <a class="navbar-brand m-0" href="/">
            <img
            src="../assets/admin/img/CheckappLogo.png"
            class="navbar-brand-img h-100"
            alt="main_logo"
            />
            <span class="ms-1 font-weight-bold">CheckApp</span>
        </a>
        </div>
        <hr class="horizontal dark mt-0" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                  <div
                  class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <svg
                        width="12px"
                        height="12px"
                        viewBox="0 0 42 42"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                        <title>office</title>
                        <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                        >
                        <g
                            transform="translate(-1869.000000, -293.000000)"
                            fill="#FFFFFF"
                            fill-rule="nonzero"
                        >
                            <g transform="translate(1716.000000, 291.000000)">
                            <g
                                id="office"
                                transform="translate(153.000000, 2.000000)"
                            >
                                <path
                                class="color-background opacity-6"
                                d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                ></path>
                                <path
                                class="color-background"
                                d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                ></path>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/clinic-request">
                    <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                    >
                    <svg
                        width="12px"
                        height="12px"
                        viewBox="0 0 43 36"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                        <title>credit-card</title>
                        <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                        >
                        <g
                            transform="translate(-2169.000000, -745.000000)"
                            fill="#FFFFFF"
                            fill-rule="nonzero"
                        >
                            <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(453.000000, 454.000000)">
                                <path
                                class="color-background opacity-6"
                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                ></path>
                                <path
                                class="color-background"
                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                ></path>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                    </div>
                    <span class="nav-link-text ms-1">Clinics Request</span>
                </a>
            </li>

              {{-- <li class="nav-item">
                  <a class="nav-link " href="/Add-Doctor">
                      <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                      >
                      <svg
                          width="12px"
                          height="12px"
                          viewBox="0 0 42 42"
                          version="1.1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                      >
                          <title>box-3d-50</title>
                          <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd"
                          >
                          <g
                              transform="translate(-2319.000000, -291.000000)"
                              fill="#FFFFFF"
                              fill-rule="nonzero"
                          >
                              <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(603.000000, 0.000000)">
                                  <path
                                  class="color-background"
                                  d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                                  ></path>
                                  <path
                                  class="color-background opacity-6"
                                  d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                  ></path>
                                  <path
                                  class="color-background opacity-6"
                                  d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                  ></path>
                              </g>
                              </g>
                          </g>
                          </g>
                      </svg>
                      </div>
                      <span class="nav-link-text ms-1">Add Doctor</span>
                  </a>
              </li> --}}
              <li class="nav-item">
                  <a class="nav-link" href="../pages/profile.html">
                      <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                      >
                      <svg
                          width="12px"
                          height="12px"
                          viewBox="0 0 46 42"
                          version="1.1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                      >
                          <title>customer-support</title>
                          <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd"
                          >
                          <g
                              transform="translate(-1717.000000, -291.000000)"
                              fill="#FFFFFF"
                              fill-rule="nonzero"
                          >
                              <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(1.000000, 0.000000)">
                                  <path
                                  class="color-background opacity-6"
                                  d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                  ></path>
                                  <path
                                  class="color-background"
                                  d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                                  ></path>
                                  <path
                                  class="color-background"
                                  d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                                  ></path>
                              </g>
                              </g>
                          </g>
                          </g>
                      </svg>
                      </div>
                      <span class="nav-link-text ms-1">Profile</span>
                  </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../pages/sign-in.html">
                  <div
                  class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                  >
                  <svg
                      width="12px"
                      height="12px"
                      viewBox="0 0 40 44"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                  >
                      <title>document</title>
                      <g
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                      >
                      <g
                          transform="translate(-1870.000000, -591.000000)"
                          fill="#FFFFFF"
                          fill-rule="nonzero"
                      >
                          <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 300.000000)">
                              <path
                              class="color-background opacity-6"
                              d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                              ></path>
                              <path
                              class="color-background"
                              d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                              ></path>
                          </g>
                          </g>
                      </g>
                      </g>
                  </svg>
                  </div>
                  <span class="nav-link-text ms-1">Settings</span>
              </a>
              </li>
              <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf
                  <a class="nav-link text-danger" href="{{ route('logout') }}" @click.prevent="$root.submit();" >
                      <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center "
                      >
                      <i
                      class="icons fa-solid fa-arrow-right-from-bracket text-danger"
                      data-fa-transform="flip-h"
                      ></i>
                      </div>
                      <span class="nav-link-text ms-1">Log out</span>
                  </a>
              </form>
              </li>
          </ul>
        </div>
    </aside>

    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        {{-- navbar-scroll="true" --}}
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                Clinic Request
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Clinic Request</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              
            </div>
            <ul class="navbar-nav justify-content-end">
  
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg class="svg-inline--fa fa-bell cursor-pointer" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z"></path></svg><!-- <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                </a>
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/admin/img/team-2.jpg" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span>
                            from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <i class="fa fa-clock me-1" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/admin/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by
                            Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <i class="fa fa-clock me-1" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <i class="fa fa-clock me-1" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <svg class="svg-inline--fa fa-gear fixed-plugin-button-nav cursor-pointer" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"></path></svg><!-- <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i> Font Awesome fontawesome.com -->
                </a>
              </li>

              <li class="nav-item d-xl-none pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item ps-1 d-flex align-items-center">
                <div href="#" data-bs-toggle="dropdown" data-bs-display="static" class=""><img src="/assets/img/3efdbd.jpeg" class="img-thumbnail rounded-circle" alt="Avatar" width="36px">
                  {{ Auth::user()->lname}}
                </div>
              </li>
            </ul>
          </div>
        </div>

      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4 pt-1">
        @foreach ($data as $selected)
          @if ($selected->status=='pending')
            <div class="col-lg-12">
              <div class="card p-3" >
                <div
                  class="overflow-hidden position-relative border-radius-xl"
                >
                  <div class="card-header py-2">
                    <h4 class="text-center">Clinic Request Form</h4>
                  </div>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="card-header pb-0 pe-0">
                        <div class="row">
                            <div class="d-flex align-items-center">
                            <h6 class="mb-0">Clinic Information</h6>
                            </div>
                        </div>
                      </div>
                      <div
                          class="card-body  position-relative z-index-1 pe-0"
                      >
                          <div class="mb-3">
                            <img
                            class="w-50 position-relative z-index-2"
                            src="../assets/admin/img/clinicimage/{{ $selected->Profile }}"
                            alt="profile"
                            />
                          </div>
                          <div class="row" >
                              <div class="col-4">
                                <h6 class="text-md mb-2">Clinic's Name:</h6>
                                <h6 class="text-md mb-2">Owner's Name:</h6>
                                <h6 class="text-md mb-2">Address:</h6>
                                <h6 class="text-md mb-2">Email:</h6>
                                <h6 class="text-md mb-2">Contact:</h6>
                              </div>
                              <div class="col-8">
                                <p class="text-md mb-2">{{ $selected->clinicname }}</p>
                                <p class="text-md mb-2">{{ $selected->ofname }} {{ $selected->olname }}</p>
                                <p class="text-md mb-2">{{ $selected->caddress }}</p>
                                <p class="text-md mb-2">{{ $selected->cemail }}</p>
                                <p class="text-md mb-2">{{ $selected->Ccontact }}</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Proof</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-3">
                          <embed
                              src="./assets/admin/img/clinicimage/{{ $selected->Proof }}""
                              type="application/pdf"
                              frameBorder="0"
                              scrolling="auto"
                              height="300px%"
                              width="100%"
                          ></embed>
                        </div>
                      </div>
                  </div>
                </div>                    
              </div>
              <div class="card p-3 my-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Confirmation</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a
                        class="btn bg-gradient-danger mb-0"
                        href="{{ url('selected-reject', $selected->id) }}"
                        ><i class="fas fa-times"></i>&nbsp;&nbsp;Decline</a
                        >
                        <a
                        class="btn bg-gradient-success mb-0 mt-md-0 mt-2"
                        href="{{ url('selected-clinic', $selected->id) }}"
                        ><i class="fas fa-check"></i>&nbsp;&nbsp;Approve</a
                        >
                    </div>
                </div>               
              </div>     
            </div>
          @endif
        @endforeach
        {{-- <div class="row">
          <div class="col-md-7 my-2 my-lg-0">
              <div class="card" style="height: 576px">
                <div class="card-header pb-0 px-3">
                  <h6 class="mb-0">Appointment History</h6>
                </div>
                <div class="card-body pt-4 p-3 overflow-auto">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Oliver Liam</h6>
                          <span class="mb-2 text-xs"
                              >Company Name:
                              <span class="text-dark font-weight-bold ms-sm-2">
                              Viking Burrito
                              </span>
                          </span>
                          <span class="mb-2 text-xs">
                            Email Address:
                            <span class="text-dark ms-sm-2 font-weight-bold">
                              oliver@burrito.com
                            </span>
                          </span>
                          <span class="text-xs">
                            VAT Number:
                            <span class="text-dark ms-sm-2 font-weight-bold">
                              FRB1235476
                            </span>
                          </span>
                      </div>
                      <div class="ms-auto text-end">
                        <a
                          class="btn btn-link text-danger text-gradient px-3 mb-0"
                          href="javascript:;"
                          ><i class="far fa-trash-alt me-2"></i>Delete
                        </a>
                          <a
                            class="btn btn-link text-dark px-3 mb-0"
                            href="javascript:;"
                            ><i
                            class="fas fa-pencil-alt text-dark me-2"
                            aria-hidden="true"
                            ></i
                            >Edit</a>
                        </div>
                    </li>
                    <li
                      class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"
                    >
                        <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Lucas Harper</h6>
                          <span class="mb-2 text-xs"
                              >Company Name:
                              <span class="text-dark font-weight-bold ms-sm-2"
                              >Stone Tech Zone</span
                              ></span
                          >
                          <span class="mb-2 text-xs"
                              >Email Address:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >lucas@stone-tech.com</span
                              ></span
                          >
                          <span class="text-xs"
                              >VAT Number:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >FRB1235476</span
                              ></span
                          >
                        </div>
                        <div class="ms-auto text-end">
                          <a
                              class="btn btn-link text-danger text-gradient px-3 mb-0"
                              href="javascript:;"
                              ><i class="far fa-trash-alt me-2"></i>Delete</a
                          >
                          <a
                              class="btn btn-link text-dark px-3 mb-0"
                              href="javascript:;"
                              ><i
                              class="fas fa-pencil-alt text-dark me-2"
                              aria-hidden="true"
                              ></i
                              >Edit</a
                          >
                        </div>
                      </li>
                      <li
                          class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"
                      >
                          <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Ethan James</h6>
                          <span class="mb-2 text-xs"
                              >Company Name:
                              <span class="text-dark font-weight-bold ms-sm-2"
                              >Fiber Notion</span
                              ></span
                          >
                          <span class="mb-2 text-xs"
                              >Email Address:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >ethan@fiber.com</span
                              ></span
                          >
                          <span class="text-xs"
                              >VAT Number:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >FRB1235476</span
                              ></span
                          >
                          </div>
                          <div class="ms-auto text-end">
                          <a
                              class="btn btn-link text-danger text-gradient px-3 mb-0"
                              href="javascript:;"
                              ><i class="far fa-trash-alt me-2"></i>Delete</a
                          >
                          <a
                              class="btn btn-link text-dark px-3 mb-0"
                              href="javascript:;"
                              ><i
                              class="fas fa-pencil-alt text-dark me-2"
                              aria-hidden="true"
                              ></i
                              >Edit</a
                          >
                          </div>
                      </li>
                      <li
                          class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"
                      >
                          <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Ethan James</h6>
                          <span class="mb-2 text-xs"
                              >Company Name:
                              <span class="text-dark font-weight-bold ms-sm-2"
                              >Fiber Notion</span
                              ></span
                          >
                          <span class="mb-2 text-xs"
                              >Email Address:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >ethan@fiber.com</span
                              ></span
                          >
                          <span class="text-xs"
                              >VAT Number:
                              <span class="text-dark ms-sm-2 font-weight-bold"
                              >FRB1235476</span
                              ></span
                          >
                          </div>
                          <div class="ms-auto text-end">
                          <a
                              class="btn btn-link text-danger text-gradient px-3 mb-0"
                              href="javascript:;"
                              ><i class="far fa-trash-alt me-2"></i>Delete</a
                          >
                          <a
                              class="btn btn-link text-dark px-3 mb-0"
                              href="javascript:;"
                              ><i
                              class="fas fa-pencil-alt text-dark me-2"
                              aria-hidden="true"
                              ></i
                              >Edit</a
                          >
                          </div>
                      </li>
                  </ul>
                </div>
              </div>
          </div>
          <div class="col-md-5 mt-2 mt-lg-0">
            <div class="card mb-4" style="height: 576px">
              <div class="card-header pb-0 px-3">
                  <div class="row">
                  <div class="col-md-6">
                      <h6 class="mb-0">Upcoming Request</h6>
                  </div>
                  <div
                      class="col-md-6 d-flex justify-content-end align-items-center"
                  >
                      <i class="far fa-calendar-alt me-2"></i>
                      <small>
                          <script>
                              document.write(new Date().toISOString().slice(0, 10))
                          </script>
                      </small>
                  </div>
                  </div>
              </div>
              <div class="card-body pt-4 p-3 overflow-auto">
                <ul class="list-group">
                  @if ($data->count()>0)
                    @foreach ($data as $clinicreqst)
                      <a href="#" class=""  onclick="request({{ $clinicreqst->id }})" >
                        <li
                        class="list-group-item list-group-item-action border-0 d-flex justify-content-between border-radius-lg"
                        >
                          <div class="d-flex align-items-center">
                          <div
                              class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"
                          >
                              <i class="fas fa-spinner"></i>
                          </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">{{ $clinicreqst->clinicname }}</h6>
                                <span class="text-xs">{{ $clinicreqst->cemail  }}</span>
                            </div>
                          </div>
                          <div
                          class="d-flex align-items-center text-sm "
                          >
                          {{ $clinicreqst->created_at}}
                          </div>
                        </li>
                      </a>
                    @endforeach
                  @else
                    <li
                    class="list-group-item list-group-item-action border-0 d-flex justify-content-between border-radius-lg"
                    >
                      <div class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm"></h6>
                            <span class="text-xs">
                        </div>
                      </div>
                      <div
                      class="d-flex align-items-center text-sm font-weight-bold"
                      >
                      No Upcoming Request
                      </div>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </main>

    {{-- <script>
      $(function () {  
        $.ajax({
          url: '/clinic-request($id)',
          type: 'GET',
          data: { id: id },
          success: function(response)
          {
            console.log('my message', response);   
          }
        });
      });
    </script> --}}
    <!--   Core JS Files   -->
    <script src="../assets/admin/js/core/popper.min.js"></script>
    <script src="../assets/admin/js/core/bootstrap.min.js"></script>
    <script src="../assets/admin/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  </body>
</html>
