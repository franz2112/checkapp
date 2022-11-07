<!DOCTYPE html>
<html lang="en">
  @include('Admin.Separated.header')

  <body class="g-sidenav-show bg-gray-100">
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
              <a class="opacity-5 text-dark" href="/">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-dark" href="/Add-Doctor">Add Doctors</a>
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
                  <a class="dropdown-item border-radius-md" href="javascript:;">
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
                  <a class="dropdown-item border-radius-md" href="javascript:;">
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
                  <a class="dropdown-item border-radius-md" href="javascript:;">
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
                              <g transform="translate(1716.000000, 291.000000)">
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
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
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
                @foreach ($profiles as $info)
                <img
                  class="rounded-full"
                  src="https://ui-avatars.com/api/?name={{ urlencode($info->clinicname) }}&rounded=true&background=random&length=1&size=32px&color=ff000"
                  alt=""
                />
                {{ $info->clinicname}} @endforeach
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container position-sticky z-index-2 top-0 mb-3">
      <main class="main-content position-relative border-radius-lg">
        <div class="card mt-3">
          <div class="page-header min-vh-75">
            <div class="container">
              <div class="card-body pb-3 text-left bg-transparent">
                <h3 class="font-weight-bolder">Update Doctor</h3>
              </div>
              <form
                class="form-style"
                action="{{url('Doctor-details', $data->id)}}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                <div class="row">
                  <div class="d-flex flex-column px-5">
                    <img
                      src="../assets/admin/img/doctorimage/{{ $data->file }}"
                      class="w-15 mb-2"
                    />
                    <input
                      class="form-control form-control-sm w-30 m-0"
                      type="file"
                      id="formFile"
                      name="file"
                      value="{{ $data->file }}"
                    />
                  </div>
                  <div
                    class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto"
                  >
                    <div class="card card-plain mt-3">
                      <div class="card-body pt-0">
                        <label>First Name</label>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="First Name"
                            aria-label="Dfname"
                            aria-describedby="Dfname"
                            name="Dfname"
                            value="{{ $data->Dfname }}"
                          />
                        </div>
                        <label>Last Name</label>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Last Name"
                            aria-label="Dlname"
                            aria-describedby="Dlname"
                            name="Dlname"
                            value="{{ $data->Dlname }}"
                          />
                        </div>
                        <label>Birthdate</label>
                        <div class="mb-3">
                          <input
                            type="date"
                            class="form-control"
                            placeholder="Bdate"
                            aria-label="Bdate"
                            aria-describedby="Bdate"
                            name="date"
                            value="{{ $data->Bdate }}"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto"
                  >
                    <div class="card card-plain mt-3">
                      <div class="card-body pt-0">
                        <label>Specialization</label>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Specialization"
                            aria-label="Specialization"
                            aria-describedby="Specialization"
                            name="Specialization"
                            value="{{ $data->Specialization }}"
                          />
                        </div>
                        <label>Email</label>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Email"
                            aria-label="Email"
                            aria-describedby="Email"
                            name="Demail"
                            value="{{ $data->Demail }}"
                          />
                        </div>
                        <label>Phone Number</label>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Phone Number"
                            aria-label="Dphone"
                            aria-describedby="Dphone"
                            name="Dphone"
                            value="{{ $data->Dphone }}"
                          />
                        </div>

                        <div class="text-center">
                          <button
                            type="success"
                            class="btn btn-primary w-100 mt-4 mb-0"
                          >
                            Update Profile
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="card mt-3">
          <div class="page-header min-vh-75">
            <div class="container">
              <div class="card-body pb-3 text-left bg-transparent">
                <h3 class="font-weight-bolder text-dark text-gradient pt-3">
                  Doctor's Availability
                </h3>
                <div class="pb-0 text-left bg-transparent">
                  <p>Set Time and Date of the Doctor's Availability</p>
                </div>
                <form class="form-style" action="{{url('Appointment-Set', $data->id)}}" method="post">
                  @csrf

                  <div class="pb-2">Choose date</div>
                  <div class="">
                    <input
                      type="date"
                      class="form-control datetimepicker-input"
                      {{-- id="datepicker"
                      data-toggle="datetimepicker"
                      data-target="#datepicker" --}}
                      name="date" 
                    />
                  </div>

                  <div class="mb-3">
                    <div class="row pt-3">
                      <div class="col-6">Choose AM time</div>
                      <div class="col-6 text-end">
                        <span class="">Mark/Unmark All</span>
                        <input
                          type="checkbox"
                          onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked"
                        />
                      </div>
                    </div>
                    <div class="pt-2">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="6am"
                              />
                               6am
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="6:30am"
                              />
                               6:30am
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="7am"
                              />
                               7am
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="7:30am"
                              />
                               7:30am
                            </td>

                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="8am"
                              />
                               8am
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="8:30am"
                              />
                               8:30am
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">4</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="9am"
                              />
                               9am
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="9:30am"
                              />
                               9:30am
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">5</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="10am"
                              />
                               10am
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="10:30am"
                              />
                               10:30am
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">6</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="11am"
                              />
                               11am
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="11:30am"
                              />
                               11:30am
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="pt-3">
                    <div>Choose PM time</div>
                    <div class="pt-2">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th scope="row">7</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="12pm"
                              /> 12pm
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="12:30pm"
                              /> 12:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="1pm"
                              /> 1pm
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="1:30pm"
                              /> 1:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="2pm"
                              /> 2pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="2:30pm"
                              /> 2:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="3pm"
                              /> 3pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="3:30pm"
                              /> 3:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="4pm"
                              /> 4pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="4:30pm"
                              /> 4:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="5pm"
                              /> 5pm
                            </td>

                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="5:30pm"
                              /> 5:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">13</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="6pm"
                              /> 6pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="6:30pm"
                              /> 6:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">14</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="7pm"
                              /> 7pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="7:30pm"
                              /> 7:30pm
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">15</th>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="8pm"
                              /> 8pm
                            </td>
                            <td>
                              <input
                                type="checkbox"
                                name="time[]"
                                value="8:30pm"
                              /> 8:30pm
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success 
    alert-dissmissible 
    fade show 
    position-fixed
    z-index-2  
    bottom-0 end-0 p-0 m-3 shadow-lg  rounded-0
    "role="alert"
    id="dismiss">
      <div class="p-3  rounded-0">
        <div class="row">
          <div class="col-10 d-flex justify-content-center align-item-center">
            <div class="card-body">
              <div class="text-center" style="font-size: 13px; font-weight: 600">
                  {{session()->get('message')}}
              </div>
              <div class="text-center" style="font-size: 12px">
                Please wait for the confirmation.
              </div>
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center align-item-center">
            <button type="button" data-bs-dismiss="alert" aria-label="Close" class="btn py-0 px-2 mb-0 shadow-none">
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
    {{--
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    --}}
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
    <script type="text/javascript">
      $(document).ready(function(){
          $("#datepicker").datetimepicker({
              format:'YYYY-MM-DD'
          })
      })
  </script>
  </body>
  @stack('modals') @livewireScripts
</html>
