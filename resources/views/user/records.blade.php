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
          <!-- header -->

          <!-- nav -->
          @include('user.separated.nav')
          <!-- nav end -->

          <!-- header end -->
          <div class="main-content">
            <div class="content-wrapper px-3">
              <div class="card mb-4">
                <div class="card-header pb-0"
                  style="background-color: #35bf53;"
                >
                  <h6 class="text-light">Records table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doctor</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Clinic</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($appointmentDetails as $appointDetail )
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                @foreach ($doctorDetails as $doc)
                                  <div>
                                    @if ($appointDetail->doctor==$doc->id)
                                    <img src="/../assets/admin/img/doctorimage/{{ $doc->file  }}" class="avatar avatar-sm me-3 rounded" alt="user1" style="width: 50px">
                                    @endif
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">
                                        @if ($appointDetail->doctor==$doc->id)
                                          Doc {{$doc->Dfname }} {{$doc->Dlname }}
                                        @endif
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                @endforeach
                              </div>
                            </td>
                            <td class="align-middle">
                              <p class="text-xs text-secondary mb-0 ">
                                @foreach ($clinicDetails as $clinic)
                                  @if ($appointDetail->clinic_id==$clinic->id)
                                     {{$clinic->clinicname }}
                                  @endif
                                @endforeach
                              </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm" style="background-color: #35bf53">Online</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">{{ $appointDetail->date }}</span>
                              {{-- <span class="text-secondary text-xs font-weight-bold">{{ date("F", mktime(0, 0, 0, $appointDetail->date, 1)) }}</span> --}}
                            </td>
                            <td class="align-middle text-center">
                              <button href="javascript:;" class="btn btn-outline-secondary p-1"  style="font-size: 12px" data-toggle="tooltip" data-original-title="Edit user">
                                View Details
                              </button>
                            </td>
                            <td class="align-middle text-center">
                              <button href="javascript:;" class="btn btn-outline-secondary p-1"  style="font-size: 12px" data-toggle="tooltip" data-original-title="Edit user">
                                Request Record
                              </button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
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
  @stack('modals') @livewireScripts
</html>
