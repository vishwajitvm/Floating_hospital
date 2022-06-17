@extends('users_dashboard.user_master')
@section('user')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">null <small class="text-success"><i class="fa fa-caret-up"></i> Upcoming Party</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">null <small class="text-success"><i class="fa fa-caret-up"></i> Missed Party</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p> --}}
                              <h3 class="text-white mb-0 font-weight-500"> null <small class="text-danger"><i class="fa fa-caret-down"></i> Your total Request</small></h3>
                          </div>
                      </div>
                  </div>
              </div>


          </div>
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->


@endsection
