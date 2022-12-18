<!DOCTYPE html>
<html lang="en">

  @section('title') 
  Appointments |  
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
        <div class=" px-lg-0 px-4" style="max-width: 1320px;margin-right: auto;margin-left: auto;">
          <!-- header -->

          <!-- nav -->
          @include('user.separated.nav')
          <!-- nav end -->

          <!-- header end -->
          <div class="main-content">
            <div class="content-wrapper px-5">
              <div class="nav-search">
                <div class="nav-appoint">
                  <ul
                    class="nav-own nav-tabs nav-pills mb-3"
                    id="pills-tab"
                    role="tablist"
                  >
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active me-4"
                        id="pills-latest-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-latest"
                        type="button"
                        role="tab"
                        aria-controls="pills-latest"
                        aria-selected="true"
                      >
                        <i class="fa-regular fa-file-lines fa-lg"></i>
                        <span class="text">Latest</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-4"
                        id="pills-Approved-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-Approved"
                        type="button"
                        role="tab"
                        aria-controls="pills-Approved"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-clipboard-check fa-lg"></i>
                        <span class="text">Approved</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-4"
                        id="pills-Pending-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-Pending"
                        type="button"
                        role="tab"
                        aria-controls="pills-Pending"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-spinner fa-lg"></i>
                        <span class="text">Pending</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-4"
                        id="pills-cancelled-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-cancelled"
                        type="button"
                        role="tab"
                        aria-controls="pills-cancelled"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-file-excel fa-lg"></i>
                        <span class="text">Cancelled</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link me-4"
                        id="pills-history-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-history"
                        type="button"
                        role="tab"
                        aria-controls="pills-history"
                        aria-selected="false"
                      >
                        <i class="fa-solid fa-clock-rotate-left fa-lg"></i>
                        <span class="text">History</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- nav-end -->
              <div class="tab-content" id="pills-tabContent">
                <!-- Latest pane -->
                <div
                  class="tab-pane fade show active"
                  id="pills-latest"
                  role="tabpanel"
                  aria-labelledby="pills-latest-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @if ($dataAppoints->isEmpty() )
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no appointment for this month.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @foreach ($dataAppoints as $appoints)
                    <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img
                                src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}"
                                alt=""
                              />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                @if ($appoints->status=='Approved')
                                <span class="active">Approved</span>
                                @elseif ($appoints->status=='pending')
                                <span class="pending">Pending</span>
                                @else
                                <span class="cancel">Cancelled</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h6 class="mb-0 text-uppercase text-truncate pe-2">
                            {{$appoints->clinic->clinicname}}
                          </h6>
                          <span>
                            <p>
                              @foreach ($doctorNames as $doc)
                                @if ($appoints->doctor==$doc->id)
                                  Doc {{$doc->Dfname }}
                                @endif
                              @endforeach
                            </p>
                          </span>
                          <span>
                            <p>{{$appoints->consultation}} Consultation</p>
                          </span>
                          <span>
                            <p>{{ date('F d, Y', strtotime($appoints->date)) }}  | {{$appoints->time}}</p>
                          </span>
                          <span>
                            @if ($appoints->status=='Approved')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @elseif ($appoints->status=='pending')
                            <a
                              href="{{ url('user/Cancel-appoint', $appoints->id) }}"
                              class="btn cancel"
                            >
                              Cancel Appointment
                            </a>
                            @elseif ($appoints->status=='Declined')
                            <a href="clinics" class="btn view">Reschedule</a>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>

                <!-- approved pane -->
                <div
                  class="tab-pane fade"
                  id="pills-Approved"
                  role="tabpanel"
                  aria-labelledby="pills-Approved-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @if ($dataAppoints->count()<=0 )
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no approved appointment for this month.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @foreach ($dataAppoints as $appoints)
                    @if($appoints->status == 'Approved')
                    <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img
                                src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}"
                                alt=""
                              />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                @if ($appoints->status=='Approved')
                                <span class="active">Approved</span>
                                @elseif ($appoints->status=='pending')
                                <span class="pending">Pending</span>
                                @else
                                <span class="cancel">Cancelled</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h6 class="mb-0 text-uppercase text-truncate pe-2">
                            {{$appoints->clinic->clinicname}}
                          </h6>
                          <span>
                            <p>
                              @foreach ($doctorNames as $doc)
                                @if ($appoints->doctor==$doc->id)
                                  Doc {{$doc->Dfname }}
                                @endif
                              @endforeach
                            </p>
                          </span>
                          <span>
                            <p>{{$appoints->consultation}} Consultation</p>
                          </span>
                          <span>
                            <p>{{ date('F d, Y', strtotime($appoints->date)) }}  | {{$appoints->time}}</p>
                          </span>
                          <span>
                            @if ($appoints->status=='Approved')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @elseif ($appoints->status=='pending')
                            <a
                              href="{{ url('Cancel-appoint', $appoints->id) }}"
                              class="btn cancel"
                            >
                              Cancel Appointment
                            </a>
                            @elseif ($appoints->status=='Declined')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no approved appointments.
                        </div>
                      </div>
                    </div>
                    @endif @endforeach
                  </div>
                </div>

                <!-- pending pane -->
                <div
                  class="tab-pane fade"
                  id="pills-Pending"
                  role="tabpanel"
                  aria-labelledby="pills-Pending-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @if ($dataAppoints->count()<=0 )
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no pending appointment for this month.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @foreach ($dataAppoints as $appoints)
                    @if($appoints->status=='pending')
                    <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img
                                src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}"
                                alt=""
                              />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                @if ($appoints->status=='Approved')
                                <span class="active">Approved</span>
                                @elseif ($appoints->status=='pending')
                                <span class="pending">Pending</span>
                                @else
                                <span class="cancel">Cancelled</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h6 class="mb-0 text-uppercase text-truncate pe-2">
                            {{$appoints->clinic->clinicname}}
                          </h6>
                          <span>
                            <p>
                              @foreach ($doctorNames as $doc)
                                @if ($appoints->doctor==$doc->id)
                                  Doc {{$doc->Dfname }}
                                @endif
                              @endforeach
                            </p>
                          </span>
                          <span>
                            <p>{{$appoints->consultation}} Consultation</p>
                          </span>
                          <span>
                            <p>{{ date('F d, Y', strtotime($appoints->date)) }}  | {{$appoints->time}}</p>
                          </span>
                          <span>
                            @if ($appoints->status=='Approved')
                            <a href="#" class="btn view">View Details</a>
                            @elseif ($appoints->status=='pending')
                            <a
                              href="{{ url('Cancel-appoint', $appoints->id) }}"
                              class="btn cancel"
                            >
                              Cancel Appointment
                            </a>
                            @elseif ($appoints->status=='Declined')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no pending appointments.
                        </div>
                      </div>
                    </div>
                    @endif @endforeach
                  </div>
                </div>

                <!-- cancelled -->
                <div
                  class="tab-pane fade"
                  id="pills-cancelled"
                  role="tabpanel"
                  aria-labelledby="pills-cancelled-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @if ($dataAppoints->count()<=0 )
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no cancelled appointment for this month.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @foreach ($dataAppoints as $appoints)
                    @if($appoints->status == 'Declined')
                    <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img
                                src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}"
                                alt=""
                              />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                @if ($appoints->status=='Approved')
                                <span class="active">Approved</span>
                                @elseif ($appoints->status=='pending')
                                <span class="pending">Pending</span>
                                @else
                                <span class="cancel">Cancelled</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h6 class="mb-0 text-uppercase text-truncate pe-2">
                            {{$appoints->clinic->clinicname}}
                          </h6>
                          <span>
                            <p>
                              @foreach ($doctorNames as $doc)
                                @if ($appoints->doctor==$doc->id)
                                  Doc {{$doc->Dfname }}
                                @endif
                              @endforeach
                            </p>
                          </span>
                          <span>
                            <p>{{$appoints->consultation}} Consultation</p>
                          </span>
                          <span>
                            <p>{{ date('F d, Y', strtotime($appoints->date)) }}  | {{$appoints->time}}</p>
                          </span>
                          <span>
                            @if ($appoints->status=='Approved')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @elseif ($appoints->status=='pending')
                            <a
                              href="{{ url('Cancel-appoint', $appoints->id) }}"
                              class="btn cancel"
                            >
                              Cancel Appointment
                            </a>
                            @elseif ($appoints->status=='Declined')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no cancelled appointments.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @endforeach
                  </div>
                </div>

                <!-- History -->
                <div
                  class="tab-pane fade"
                  id="pills-history"
                  role="tabpanel"
                  aria-labelledby="pills-history-tab"
                  tabindex="0"
                >
                  <div class="row">
                    @if ($dataAppoints->count()<=0 )
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no appointment history.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @foreach ($dataAppoints as $appoints)
                    @if($appoints->status !== 'pending')
                    <div class="col-xl-4 col-lg-6 pt-2 pb-4 wow zoomIn">
                      <div class="card-appoint">
                        <div class="header">
                          <div class="row">
                            <div class="col-6">
                              <img
                                src="../assets/admin/img/clinicimage/{{$appoints->clinic->Profile}}"
                                alt=""
                              />
                            </div>
                            <div class="col-6">
                              <div class="cover">
                                @if ($appoints->status=='Approved')
                                <span class="active">Approved</span>
                                @elseif ($appoints->status=='pending')
                                <span class="pending">Pending</span>
                                @else
                                <span class="cancel">Cancelled</span>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="body">
                          <h6 class="mb-0 text-uppercase text-truncate pe-2">
                            {{$appoints->clinic->clinicname}}
                          </h6>
                          <span>
                            <p>
                              @foreach ($doctorNames as $doc)
                                @if ($appoints->doctor==$doc->id)
                                  Doc {{$doc->Dfname }}
                                @endif
                              @endforeach
                            </p>
                          </span>
                          <span>
                            <p>{{$appoints->consultation}}</p>
                          </span>
                          <span>
                            <p>{{ date('F d, Y', strtotime($appoints->date)) }} | {{$appoints->time}}</p>
                          </span>
                          <span>
                            @if ($appoints->status=='Approved')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @elseif ($appoints->status=='pending')
                            <a
                              href="{{ url('Cancel-appoint', $appoints->id) }}"
                              class="btn cancel"
                            >
                              Cancel Appointment
                            </a>
                            @elseif ($appoints->status=='Declined')
                            <a href="#" class="btn view" data-toggle="tooltip" data-original-title="Edit user"
                            data-bs-toggle="modal" data-bs-target="#add">View Details</a>
                            @endif
                          </span>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-12 m-2 p-lg-5">
                      <div
                        class="d-flex align-item-center justify-content-center"
                      >
                        <div class="p-5 m-5">
                          There are no history appointments.
                        </div>
                      </div>
                    </div>
                    @endif 
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- main content end -->
        </div>
      </div>
      <!-- Body part-->

      {{-- footer --}} @include('user.separated.footer') {{-- footer end --}}
    </div>
  </body>

  
    {{-- modal --}}
    @foreach ($dataAppoints as $appointments)

    <div
      class="modal fade"
      id="add"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addDoctorTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" >
          <div class="modal-header" style="background-color: #35bf53; font-size: 16px">
            <div class="modal-title text-white" id="exampleModalLabel">
              Appointment Details
            </div>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
    
            <div class="container">
              <div class="d-lg-flex flex-warp">
                
                
                <div class="card col-lg-6 p-3 m-2">
                  <span class="mt-1 fw-semibold" style="font-size: 11px">Consultation Type :</span>
                  {{ $appointments->consultation }}
                  <hr class="mb-0">
                  <span class="mt-1 fw-semibold" style="font-size: 11px">Date and Time of Appointment :</span>
                  <div class="row">
                    <div class="col-12">
                      <span class="" style="font-size: 18px">                        
                        {{ date('F d, Y', strtotime($appointments->date)) }} | {{$appointments->time}} 
                        <hr class="mb-0">
                        <span class="mt-0 fw-semibold" style="font-size: 11px">Appointment Doctor :</span>
                        <div class="row">
                          <div class="col-12">
                             <div class="row">
                                <div class="col-2">
                                  <img src="/../assets/admin/img/doctorimage/1667539095.jpg" class="py-2 rounded me-2 pe-2" alt="user1" style="width: 50px; height: 50px; object-fit: cover;">
                                </div>
                                <div class="col-10 ps-0">
                                  <span> 
                                    <span style="font-size: 13px">Doctor</span>
                                    <span class="text-uppercase">
                                      @foreach ($doctorNames as $doc)
                                        @if ($appointments->doctor==$doc->id)
                                          Doc {{$doc->Dfname }}
                                        @endif
                                      @endforeach
                                    </span>
                                  </span>
                                  <div class="row" style="font-size: 13px;">
                                    <div class="col-12">
                                      <span class="fst-italic">
                                        @foreach ($doctorNames as $doc)
                                          @if ($appointments->doctor==$doc->id)
                                            Doc {{$doc->specialization }}
                                          @endif
                                        @endforeach
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </span>
                      <hr class="mb-0">
                      <span class="mt-0 fw-semibold" style="font-size: 11px">Clinic Appointment :</span>
                      <div class="row">
                        <div class="col-12">
                            <div class="row">
                              <div class="col-2">
                                <div class="text-center">
                                  <svg class="svg-inline--fa fa-location-dot p-2" style="font-size: 20px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg><!-- <i class="fa-solid fa-location-dot p-2" style="font-size: 20px"></i> Font Awesome fontawesome.com -->
                                </div>
                              </div>
                              <div class="col-10 ps-0">
                                <span class="">{{$appoints->clinic->clinicname}}</span>
                                <div class="row" style="font-size: 13px;">
                                  <div class="col-12">
                                    {{$appoints->clinic->caddress}}
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="col-lg pt-lg-0 pt-sm-3 st m-2">
                  <div class="card p-2 mb-2">
                    <span class="fw-semibold">Reason/Complaints:</span>
                    <div class="">
                      <div class="col-12">
                        <span class="text-capitalize" style="font-size: 13px">{{$appoints->reason}}</span>
                      </div>
                    </div>
                  </div>
                  @if ($appointments->consultation=='Online')
                  <div class="card p-2 mb-2">
                    <span class="fw-semibold">Consultation Link:</span>
                    <div class="row">
                      <div class="col-12">
                        <span class="text-capitalize" style="font-size: 13px">axdf</span>
                      </div>
                    </div>
                  </div>
                  @endif
                  <div class="card p-2 mb-2">
                    <span class="fw-semibold">Payment:</span>
                    <div class="">
                      <div class="col-12">
                        <img
                        src="../assets/admin/img/clinicimage/{{$appoints->clinic->qrimage}}"
                        alt=""
                        style="width: 100px"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
      </div>
    </div>
    @endforeach
  @stack('modals') @livewireScripts
</html>
