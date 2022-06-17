@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">User List</h3>
                <a href=" {{ route('users.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add User </a>
              </div>
              <!-- /.box-header -->
              <div class="box">
                <div class="box-body box-profile">            
                  <div class="row">
                    <div class="col-12">
                        <div>
                            <p>Usertype :<span class="text-gray pl-10" style="color: {{$data->usertype ==null?'red':'green'}}" > {{ $data->usertype == null?"NOT APPROVED YET":Str::upper($data->usertype) }} </span> </p>
                            <p>Name :<span class="text-gray pl-10"> {{ $data->name }} </span> </p>
                            <p>Email  :<span class="text-gray pl-10"> {{ $data->email == null?"NA":$data->email  }} </span> </p>
                            <p>Mobile No :<span class="text-gray pl-10"> {{ $data->mobile == null?"NA":$data->mobile }} </span> </p>
                            <p>Address :<span class="text-gray pl-10"> {{ $data->address == null?"NA":Str::upper( $data->address) }} </span> </p>
                            <p>Gender  :<span class="text-gray pl-10"> {{ $data->gender== null?"NA":$data->gender  }} </span> </p>
                            <p>Date of Birth  :<span class="text-gray pl-10"> {{ $data->birth_date== null?"NA":$data->birth_date  }} </span> </p>
                            <p>Gmail Adress  :<span class="text-gray pl-10"> {{ $data->gmail_address== null?"NA":$data->gmail_address  }} </span> </p>
                            <p>Facebook  :<span class="text-gray pl-10"> {{ $data->facebook_profile== null?"NA":$data->facebook_profile  }} </span> </p>
                            <p>Instagram  :<span class="text-gray pl-10"> {{ $data->instagram_profile== null?"NA":$data->instagram_profile  }} </span> </p>
                            <p>Linkdin  :<span class="text-gray pl-10"> {{ $data->linkdine_profile== null?"NA":$data->linkdine_profile  }} </span> </p>
                            <p>Hear About Party  :<span class="text-gray pl-10"> {{ $data->hear_about_party== null?"NA":$data->hear_about_party  }} </span> </p>
                            <p>Expectation From Aragma  :<span class="text-gray pl-10"> {{ $data->expectation_from_aragma== null?"NA":$data->expectation_from_aragma  }} </span> </p>
                            <p>User Tallent  :<span class="text-gray pl-10"> {{ $data->user_tallent== null?"NA":$data->user_tallent  }} </span> </p>
                            <p>Linkdin  :<span class="text-gray pl-10"> {{ $data->linkdine_profile== null?"NA":$data->linkdine_profile  }} </span> </p>



                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pb-15">						
                            <p class="mb-10">Social Profile</p>
                            <div class="user-social-acount">
                                <a href={{$data->facebook_profile}} class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="" class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="" class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                <a href="mailto:{{$data->gmail_address }}" class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-envelope"></i></a>
                                <a href="" class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-linkedin-square"></i></a>

                            </div>
                        </div>
                    </div>
                   

                  </div>
                </div>
                <!-- /.box-body -->
              </div>              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
