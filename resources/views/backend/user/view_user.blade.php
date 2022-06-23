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
                              <th> Location </th>
                              <th>Department</th>
                              <th>Name</th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($allData as $key => $user)
                          <tr>
                              <td> {{$key+1}} </td>
                              <th> {{ $user->user_department_location }} </th>
                              <td> {{$user->user_department}} </td>

                              <td> {{$user->name}} </td>
                              <td>
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
