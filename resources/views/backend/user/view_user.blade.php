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
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th> User Status </th>
                              <th width="15%"> User Request Status </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($allData as $key => $user)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$user->usertype}} </td>
                              <td> {{$user->name}} </td>
                              <td> {{$user->email}} </td>
                              <td  style="{{($user->status =='active')?'color:green':'color:red' }} ; font-size:18px"> {{$user->status}} </td>
                              {{-- <td style="{{($user->usertype ==null)?'color:white;background:red':'color:white;background:green' }} ; font-size:18px" > {{ $user->usertype== null?" Not Approved ": "Approved" }} </td> --}}

                              <td>
                                <a href=" {{Route('users.userapprove',$user->id)}} "><span class="badge badge-lg badge-info" style="background: @if ($user->usertype ==null)
                                  gray 
                              @elseif($user->usertype == 'user')
                                  green
                              @else
                                  red
                              @endif "> 
                                @if ($user->usertype ==null)
                                    Not Approved User 
                                @elseif($user->usertype == 'user')
                                    Approved User
                                @else
                                    Admin
                                @endif
                                </span></a>

                              </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-success" href=" {{Route('users.viewuserprofile',$user->id)}} ">View User Profile</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-info" href=" {{Route('users.edit',$user->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('users.delete',$user->id)}}" id="delete">Delete</a>

                              </td>
                          </tr>
                        @endforeach

                      </tbody>

                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
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
