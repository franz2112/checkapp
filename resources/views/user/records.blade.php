<!DOCTYPE html>
<html lang="en">
  
  @section('title') 
  Records | 
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
          <div class="main-content ">
            <div class="content-wrapper px-3 ">
              <div class="card mb-4 shadow-lg">
                <div class="card-header pb-0"
                  style="background-color: #35bf53;"
                >
                  <h6 class="text-light">Records table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead style="font-size: 14px" >
                        <tr>
                          <th class="text-secondary opacity-7 align-middle text-center">#</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doctor</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Clinic</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-secondary opacity-7"></th>
                          {{-- <th class="text-secondary opacity-7"></th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($appointmentDetails as $appointDetail )
                          @if ($appointDetail->user_id== Auth::id())
                            @if ($appointDetail->state=='Completed')
                            <tr>
                              <td class="align-middle text-center"><span>{{$appointDetail->id  }}</spanc></td>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  @foreach ($doctorDetails as $doc)
                                    @if ($appointDetail->doctor==$doc->id)
                                      <div>
                                        <img src="/../assets/admin/img/doctorimage/{{ $doc->file  }}" class="avatar avatar-sm me-3 rounded" alt="user1" style="width: 50px; height: 50px; object-fit: cover;">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">
                                          Doc {{$doc->Dfname }} {{$doc->Dlname }}
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">{{$doc->Specialization }}</p>
                                      </div>
                                    @endif
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
                              <td class="align-middle text-center ">
                                <span class="text-xs text-secondary "  style="font-size: 14px">{{ $appointDetail->time }}</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"  style="font-size:14px">{{ date('F d, Y', strtotime($appointDetail->date)) }}</span>
                                {{-- <span class="text-secondary text-xs font-weight-bold">{{ date("F", mktime(0, 0, 0, $appointDetail->date, 1)) }}</span> --}}
                              </td>
                              <td class="align-middle text-center">
                                @if (!empty($appointDetail->paymentstatus))
                                <a id="showappoints" class="btn btn-outline-secondary p-1"  style="font-size: 12px" data-toggle="tooltip" data-url="{{ route('user.get-records', $appointDetail->id) }}">
                                  View Details
                                </a>
                                @endif
                              </td>
                              {{-- <td class="align-middle text-center">
                                <button href="javascript:;" class="btn btn-outline-secondary p-1"  style="font-size: 12px" data-toggle="tooltip" data-original-title="Edit user">
                                  Request Record
                                </button>
                              </td> --}}
                            </tr>
                            @endif
                          @endif
                          
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

      @include('user.separated.footer') 

    </div>

    {{-- modal --}}
    @foreach ($appointmentDetails as $appointments)

    <div
      class="modal fade"
      id="modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addDoctorTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" >
          <div class="modal-header" style="background-color: #35bf53; font-size: 16px">
            <div class="modal-title text-white" id="exampleModalLabel">
              Result and Prescription
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
                @if ($appointments->user_id)
                  <div class="col-lg pt-lg-0 pt-sm-3 st m-2">
                    <div class="card p-2 mb-2 " >
                      <span class="fw-semibold">Results</span>
                        <div class="col-12 text-center" style="min-height: 250px; max-width:337px;">
                          <span class="text-capitalize" style="font-size: 13px"><span id="paymentstatus"></span></span>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg pt-lg-0 pt-sm-3 st m-2">
                    <div class="card p-2 mb-2">
                      <span class="fw-semibold">Prescription</span>
                        <div class="col-12" style="min-height: 250px; max-width:337px;">
                          <span class="text-capitalize" style="font-size: 13px">axdf</span>
                        </div>
                    </div>
                  </div>
                @endif               
              </div>
            </div>
          </div>
      </div>
    </div>
    @endforeach

    @section('script')
    <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '#showappoints', function(){
          var clinicURL = $(this).data('url');
          $.get(clinicURL, function(data){
            $('#modal').modal('show');
            $('#id').text(data.id);
            $('#paymentstatus').text(data.paymentstatus);    
            console.log(data.paymentstatus)     
          })

        })
      });
    </script>
    @endsection
    @include('Admin.Separated.script')

  </body>
  @stack('modals') @livewireScripts
</html>
