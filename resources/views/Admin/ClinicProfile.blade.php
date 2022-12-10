<!DOCTYPE html>
<html lang="en">
  @section('title') 
  Clinic Information |  
  @endsection

  @include('Admin.Separated.header')

  <body class="g-sidenav-show bg-gray-100">

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
            <a id="active" class="nav-link" href="/">
              <div
                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 45 40"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>shop</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-1716.000000, -439.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path
                            class="color-background opacity-6"
                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                          ></path>
                          <path
                            class="color-background"
                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
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
            <a class="nav-link" href="appointment-request">
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
              <span class="nav-link-text ms-1">Appointments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/tables.html">
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
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctors-information">
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
              <span class="nav-link-text ms-1">Doctor's Information</span>
            </a>
          </li>

          <!-- rtl -->
          <li class="nav-item mt-3">
            <h6
              class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"
            >
              My Account
            </h6>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">
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
            <a class="nav-link" href="{{ route('profile.show') }}">
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
              <a
                class="nav-link text-danger"
                href="{{ route('logout') }}"
                @click.prevent="$root.submit();"
              >
                <div
                  class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
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
        navbar-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol
              class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
            >
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="">Pages</a>
              </li>
              <li
                class="breadcrumb-item text-sm text-dark active"
                aria-current="page"
              >
                Profile
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Profile Set Up</h6>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              {{--
              <div class="input-group">
                <span class="input-group-text text-body"
                  ><i class="fas fa-search" aria-hidden="true"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Type here..."
                />
              </div>
              --}}
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="dropdownMenuButton"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                  aria-labelledby="dropdownMenuButton"
                >
                  <li class="mb-2">
                    <a
                      class="dropdown-item border-radius-md"
                      href="javascript:;"
                    >
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img
                            src="../assets/admin/img/team-2.jpg"
                            class="avatar avatar-sm me-3"
                          />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span>
                            from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a
                      class="dropdown-item border-radius-md"
                      href="javascript:;"
                    >
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img
                            src="../assets/admin/img/small-logos/logo-spotify.svg"
                            class="avatar avatar-sm bg-gradient-dark me-3"
                          />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by
                            Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item border-radius-md"
                      href="javascript:;"
                    >
                      <div class="d-flex py-1">
                        <div
                          class="avatar avatar-sm bg-gradient-secondary me-3 my-auto"
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
                                <g
                                  transform="translate(1716.000000, 291.000000)"
                                >
                                  <g
                                    transform="translate(453.000000, 454.000000)"
                                  >
                                    <path
                                      class="color-background"
                                      d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                      opacity="0.593633743"
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
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
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
                  <i
                    class="fa fa-cog fixed-plugin-button-nav cursor-pointer"
                  ></i>
                </a>
              </li>

              <li class="nav-item d-xl-none pe-2 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item ps-1 d-flex align-items-center">
                <div
                  href="#"
                  data-bs-toggle="dropdown"
                  data-bs-display="static"
                  class=""
                >
                  {{-- @foreach ($clinicInfo as $info)
                  <img
                    class="rounded-full"
                    src="https://ui-avatars.com/api/?name={{ urlencode($info->clinicname) }}&rounded=true&background=random&length=1&size=32px&color=ff000"
                    alt=""
                  />
                  {{ $info->clinicname}} @endforeach --}}
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
        {{-- modal for clinic profile--}}
        <div
            class="modal fade"
            id="profile"
            tabindex="-1"
            role="dialog"
            aria-labelledby="addDoctorTitle"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">
                    Edit Clinic Profile
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                </div>
                <div class="modal-body">
                <form
                    action="{{ url('clinics/clinic-update') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="row g-3"
                >
                    @csrf
                    <div class="col-md-12">
                    <label for="Dfname" class="form-label">Clinic Name: </label>
                    <input
                        type="text"
                        name="clinicname"
                        class="form-control"
                        id="clinicname"
                        Value="{{ $profiles->clinicname }}"
                        required
                    />
                    </div>
                    <div class="col-12 mt-0">
                    <label for="Specialization" class="form-label"
                        >Clinic Address:
                    </label>
                    <input
                        type="text"
                        name="caddress"
                        class="form-control"
                        id="inputAddress"
                        value="{{ $profiles->caddress }}"
                        required
                    />
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="Demail" class="form-label">
                            Clinic Email:
                        </label>
                        <input
                            type="email"
                            name="cemail"
                            class="form-control"
                            id="cemail"
                            Value="{{ $profiles->cemail }}"
                            disabled
                        />
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="Dphone" class="form-label">
                            Clinic Phone Number:
                        </label>
                        <input
                            type="text"
                            name="Ccontact"
                            class="form-control"
                            id="Ccontact"
                            Value="{{ $profiles->Ccontact }}"
                        />
                    </div>
                    <div class="col-md-3 mt-0">
                        <label for="file" class="form-label">Upload Profile: </label>
                        <div>
                            <img class="" src="../assets/admin/img/clinicimage/{{ $profiles->Profile }}" alt="rocket" style="
                            background-repeat: no-repeat;
                            background-position: center;
                            height: 100px;
                            ">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <label for="file" class="form-label"></label>          
                        <p class="ps-2 rounded bg-light mb-2" style="font-size: 12px">{{ $profiles->Profile }}</p>
                        <input
                            type="file"
                            name="Profile"
                            class="form-control"
                            id="Profile"
                            value="{{ $profiles->Profile }}"
                        />
                    </div>

                    <div class="col-md-12 mt-0">
                        <label for="file" class="form-label">Upload Image QR for payments: </label>
                    </div>
                    <div class="col-md-3 mt-0">                      
                        <img class="" src="../assets/admin/img/clinicimage/{{ $profiles->qrimage }}" alt="qr code" style="
                        background-repeat: no-repeat;
                        background-position: center;
                        height: 100px;
                        ">
                    </div>
                    <div class="col-md-9">
                        <p class="ps-2 rounded bg-light mb-2" style="font-size: 12px">{{ $profiles->qrimage }}</p>
                        <input
                            type="file"
                            name="qrimage"
                            class="form-control"
                            id="qrimage"
                            value="{{ $profiles->qrimage }}"
                        />
                    </div>
                    <div class="col-12">
                        <div class="modal-footer border-top-0 py-0">
                            <button
                            type="button"
                            class="btn bg-gradient-secondary"
                            data-bs-dismiss="modal"
                            >
                            Close
                            </button>
                            <button type="submit" class="btn bg-gradient-primary">
                            submit
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid py-4 overflow-hidden">
            <div class="row">
                
                <div class="col-lg-4 mb-lg-2">
                    <div
                    class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#profile"
                    >
                        <div class="card p-3"">
                            <div
                                class="overflow-hidden position-relative border-radius-lg h-100"
                            >
                                <span class="mask bg-gradient-success"></span>
                                    <div
                                    class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3"
                                    >
                                        <h5 class="text-dark font-weight-bolder mb-4 pt-2">
                                            Clinic Profile
                                        </h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Clinic information --}}
                <div
                class="modal fade"
                id="information"
                tabindex="-1"
                role="dialog"
                aria-labelledby="addDoctorTitle"
                aria-hidden="true"
                >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">
                            Clinic Information
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        </div>
                        <div class="modal-body">
                        <form
                            action="{{ url('upload-doctor-info') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="row g-3"
                        >
                            @csrf
                            <div class="col-md-12">
                            <label for="Dfname" class="form-label">About your clinic: </label>
                                <textarea
                                    class="form-control my-3"
                                    rows="5"
                                    id="comment"
                                    name="about"
                                    placeholder="Clinic About Us"
                                    style="font-size: 14px"
                                    required>
                                </textarea>
                            </div>
                            <div class="col-md-12 mt-0">
                            <label for="Dfname" class="form-label">Update Clinic Information: </label>
                                <textarea
                                    class="form-control my-3"
                                    rows="5"
                                    id="comment"
                                    name="about"
                                    placeholder="Clinic About Us"
                                    style="font-size: 14px"
                                    required>
                                </textarea>
                            </div>
                            
                            <div class="col-12">
                                <div class="modal-footer border-top-0 py-0">
                                    <button
                                    type="button"
                                    class="btn bg-gradient-secondary"
                                    data-bs-dismiss="modal"
                                    >
                                    Close
                                    </button>
                                    <button type="submit" class="btn bg-gradient-primary">
                                    submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-lg-2">
                    <div class="card p-3" 
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#information">
                        <div
                            class="overflow-hidden position-relative border-radius-lg h-100"
                        >
                            <span class="mask bg-gradient-success"></span>
                            <div
                            class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3"
                            >
                            <h5 class="text-dark font-weight-bolder mb-4 pt-2">
                                Clinic Information
                            </h5>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Clinic service --}}
                <div
                class="modal fade"
                id="sched"
                tabindex="-1"
                role="dialog"
                aria-labelledby="addDoctorTitle"
                aria-hidden="true"
                >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">
                            Clinic Information
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        </div>
                        <div class="modal-body">
                        <form
                            action="{{ url('upload-doctor-info') }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="row g-3"
                        >
                            @csrf
                            <div class="col-md-12">
                            <label for="Dfname" class="form-label">Clinic Schedules: </label>
                                <textarea
                                    class="form-control my-3"
                                    rows="5"
                                    id="comment"
                                    name="about"
                                    placeholder="Clinic About Us"
                                    style="font-size: 14px"
                                    required>
                                </textarea>
                            </div>
                            <div class="col-md-12 mt-0">
                            <label for="Dfname" class="form-label">Add Service: </label>
                                <textarea
                                    class="form-control my-3"
                                    rows="5"
                                    id="comment"
                                    name="about"
                                    placeholder="Clinic About Us"
                                    style="font-size: 14px"
                                    required>
                                </textarea>
                            </div>
                            
                            <div class="col-12">
                                <div class="modal-footer border-top-0 py-0">
                                    <button
                                    type="button"
                                    class="btn bg-gradient-secondary"
                                    data-bs-dismiss="modal"
                                    >
                                    Close
                                    </button>
                                    <button type="submit" class="btn bg-gradient-primary">
                                    submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-lg-2">
                    <div class="card p-3" 
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#sched">
                        <div
                            class="overflow-hidden position-relative border-radius-lg h-100"
                        >
                            <span class="mask bg-gradient-success"></span>
                            <div
                            class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3"
                            >
                            <h5 class="text-dark font-weight-bolder mb-4 pt-2">
                                Services and Schedules
                            </h5>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @include('Admin.Separated.afooter') --}}
            </div>
        </div>
    </main>

    @if (session()->has('message'))
    <div
      class="alert alert-success alert-dissmissible fade show position-fixed z-index-2 bottom-0 end-0 p-0 m-3 shadow-lg rounded-0"
      role="alert"
      id="dismiss"
    >
      <div class="p-3 rounded-0">
        <div class="row">
          <div class="col-10 d-flex justify-content-center align-item-center">
            <div class="card-body">
              <div
                class="text-center"
                style="font-size: 13px; font-weight: 600"
              ></div>
              <div class="text-center" style="font-size: 12px">
                {{session()->get('message')}}
              </div>
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center align-item-center">
            <button
              type="button"
              data-bs-dismiss="alert"
              aria-label="Close"
              class="btn py-0 px-2 mb-0 shadow-none"
            >
              <i class="fa-solid fa-xmark text-lg"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    @endif 
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
