<!DOCTYPE html>
<html lang="en">
  @section('title') 
  {{ $data->Dfname }} {{ $data->Dlname }} - Records |  
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
            src="/../assets/admin/img/CheckappLogosm.png"
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
            <a id="active" class="nav-link" href="{{url('clinics/doctors-details', $data->id)}}">
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
              <span class="nav-link-text ms-1">Update Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('clinics/appointments-create', $data->id)}}">
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
              <span class="nav-link-text ms-1">Set Schedule</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('clinics/doctor-index', $data->id)}}">
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
              <span class="nav-link-text ms-1">Update Schedule</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">
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
              <span class="nav-link-text ms-1">Records</span>
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
        class="navbar navbar-main navbar-expand-lg px-3 mt-2 mx-4 border-radius-xl bg-success shadow-lg"
        {{--
        id="navbarBlur"
        --}}
        navbar-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol
              class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
            >
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="../doctors-information">Pages</a>
              </li>
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="../doctors-information"
                  >Add Doctors</a
                >
              </li>
              <li
                class="breadcrumb-item text-sm text-dark active"
                aria-current="page"
              >
                Doctors Details
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Doctors Information</h6>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
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
                            src="/../assets/admin/img/team-2.jpg"
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
                            src="/../assets/admin/img/small-logos/logo-spotify.svg"
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
                  {{-- @foreach ($profiles as $info)
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

      <div class="container position-sticky z-index-2 top-0">
        <div class="main-content position-relative border-radius-lg">
          <div class="card mt-3">
            <div class="page-header">
              <div class="container">
                <div class="card-body pb-3 text-left bg-transparent">
                </div>
               
                    <div class="card-header py-0">
                    <h6>Records table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-secondary opacity-7">#</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Consultation Type</th>
                            {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th> --}}
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date and Time</th>
                            <th class="text-secondary opacity-7"></th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        @foreach ($getdappointments as $usersdata)               
                          <tbody>
                            <tr>
                              <td>
                                {{ $usersdata->id }} 
                              </td>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                  <div>
                                      <img
                                      class="avatar avatar-sm me-3"
                                      src="/storage/{{$usersdata->user->profile_photo_path}} "
                                      alt="rocket"
                                      style="
                                      background-repeat: no-repeat;
                                      background-position: center;
                                      object-fit: cover;
                                      height: 140px;
                                      "
                                      />
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">{{ $usersdata->user->fname }} {{ $usersdata->user->mname }} {{ $usersdata->user->lname }}</h6>
                                      <p class="text-xs text-secondary mb-0">{{ $usersdata->user->email }}/{{ $usersdata->user->phone }}</p>
                                  </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">
                                    {{ $usersdata->consultation }} <span class="text-secondary ">Consultation</span> </p>
                              </td>
                              {{-- <td class="align-middle text-center text-sm">
                                <button type="button" class="p-1 mt-3 btn bg-primary text-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  View Reasons
                                </button>
                              </td> --}}
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">
                                    {{ $usersdata->date }} | {{ $usersdata->time }}</span>
                              </td>
                              <td class="align-middle">
                                  <a class="p-1 mt-3 btn bg-primary text-xs" id="showappoints" data-url="{{ route('clinics.upload-results', $usersdata->id) }}" >
                                    Add Result
                                  </a>
                                  <a class="p-1 mt-3 btn bg-primary text-xs" id="Prescription" data-url="{{ route('clinics.upload-prescription', $usersdata->id) }}" >
                                    Add Prescription
                                  </a>
                                  {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  View Prescription
                                  </a> --}}
                              </td>
                              {{-- <td class="align-middle">
                                  <button  class="p-1 mt-3 btn bg-gradient-success text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Upload Result
                                  </button>
                              </td> --}}
                              </tr>
                          </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      @include('Admin.Separated.afooter')

    <!--Result Modal -->
      <form action="">
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" 
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Results</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="form-style">
              <div class="modal-body">
              
                <textarea class="form-control my-3" name="result" id="result" cols="30" rows="10" placeholder="Add result here"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal" id="closebtn">Close</button>
                <button type="submit" class="btn btn-primary" id="addresult">Add</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </form>
     
    <!--Result Modal End -->

    <!--Prescription Modal -->
      <form action="">
        <div class="modal fade" id="modalpresc" tabindex="-1" aria-labelledby="modalpresc"  role="dialog" aria-hidden="true" data-bs-backdrop="static" 
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="Prescription">Add Prescription</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="form-style">
              <div class="modal-body">
              
                <textarea class="form-control my-3" name="prescription" id="prescription" cols="30" rows="10" placeholder="Add Prescription here"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal" id="closebtns">Close</button>
                <button type="submit" class="btn btn-primary" id="addpresc">Add</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </form>
    <!--Prescription Modal End -->

    </main>

    @if (session()->has('message'))
    <div
      class="alert alert-success alert-dissmissible fade show position-fixed z-index-2 bottom-0 end-0 p-0 m-2 shadow-lg rounded-0"
      role="alert"
      id="dismiss">
      <div class="p-3 rounded-0">
        <div class="row">
          <div class="col-10 d-flex justify-content-center align-item-center">
            <div class="card-body">
              <div
                class="text-center"
                style="font-size: 13px; font-weight: 600">
              </div>
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
    
    @section('script')
    <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '#showappoints', function(){

          var clinicURL = $(this).data('url');
          $.get(clinicURL, function(data){
            $('#modal').modal('show');
            // add result in model
            $(document).on('click', '#addresult', function(e){
              e.preventDefault();
           
              $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                type: "POST",
                url:"/clinics/new-results/" + (data.id),
                data: {appointmentid:data.id, result:$('#result').val()},
                success:function(response){
                  $('#modal').modal('hide');
                  $('#modal').find('textarea').val("");
                  location.reload(); 
                  // console.log('helo', response)
                },
                complete: function() {
                    self.active = false;
                }
              });
            })
            // add resuld in modal end          
          })
        })
        $(document).on('click', '#closebtn', function(){
          $('#result').val("");
        })

        // Prescription
        $(document).on('click', '#Prescription', function(){
          var clinicURL = $(this).data('url');
          $.get(clinicURL, function(data){
            $('#modalpresc').modal('show');
            // add result in model
            $(document).on('click', '#addpresc', function(e){
              e.preventDefault();
           
              $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                type: "POST",
                url:"/clinics/new-prescription/" + (data.id),
                data: {appointmentid:data.id, prescription:$('#prescription').val()},
                success:function(response){
                  $('#modalpresc').modal('hide');
                  $('#modalpresc').find('textarea').val("");
                  location.reload(); 
                  console.log('helo', response)
                },
                complete: function() {
                    self.active = false;
                }
              });
            })
            // add resuld in modal end          
          })
        })
        $(document).on('click', '#closebtns', function(){
          $('#modalpresc').val("");
        })

      });
    </script>
    @endsection
    @include('Admin.Separated.script')


  </body>
  @stack('modals') @livewireScripts
</html>
