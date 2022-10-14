<div class="col-lg-12">
    <div class="card  p-3" >
        <div
          class="overflow-hidden position-relative border-radius-xl"
        >
          <div class="card-header py-2">
            <h4 class="text-center">Clinic Request Form</h4>
          </div>
          @if ($data->count()>0)
            @foreach ($data as $selected)
              <div class="row">
                <div class="col-lg-8">
                  <div
                    class="card-body  position-relative z-index-1"
                  >
                    <div class="mb-3">
                      <img
                      class="w-20 position-relative z-index-2"
                      src="../assets/admin/img/clinicimage/asdasd"
                      alt="profile"
                      />
                    </div>
                      <div class="row">
                          <div class="col-6">
                              <h6 class="text-sm mb-0">Clinic's Name:</h6>
                              <p class="text-md mb-2">{{ $selected->clinicname }}
                              <h6 class="text-sm mb-0">Owner's Name:</h6>
                              <p class="text-md mb-2">
                                asdasd
                              </p>
                              <h6 class="text-sm mb-0">Address:</h6>
                              <p class="text-md mb-2">
                                asd
                              </p>
                          </div>
                          <div class="col-6">
                              <h6 class="text-sm mb-0">Email:</h6>
                              <p class="text-md mb-2">asdas
                              </p>
                              <h6 class="text-sm mb-0">Contact:</h6>
                              <p class="text-md mb-2">
                                asdasd
                              </p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Proof</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0  overflow-auto">
                        <img
                        class="w-50"
                        src="../assets/admin/img/team-3.jpg"
                        alt="profile"
                        />                            
                    </div>
                    <div class="px-3">
                        <button class="btn btn-outline-primary btn-sm my-3 py-1">
                            View Proof
                        </button>
                    </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="col-lg-12">
              <div class="card-body  position-relative z-index-1">
                <div class="row">
                  <div class="text-center">
                    No upcoming request
                  </div>           
                                          
                </div>
              </div>
            </div>
          @endif
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
                href="javascript:;"
                ><i class="fas fa-times"></i>&nbsp;&nbsp;Decline</a
                >
                <a
                class="btn bg-gradient-success mb-0 mt-md-0 mt-2"
                href="javascript:;"
                ><i class="fas fa-check"></i>&nbsp;&nbsp;Approve</a
                >
            </div>
        </div>               
    </div>     
  </div>
  