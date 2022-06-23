@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">

        <!--exp -->
        <section class="content">
            <div class="row">
              <div class="col-12">
               <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Department List</h3>
                    <a href=" {{ route('manage-location.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Location </a>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th width="5%">SL</th>
                                  <th>Location Name</th>
                                  <th>Location </th>
                                  <th> Department Status </th>
                                  <th width="10%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $key => $row1)
                              <tr>
                                  <td> {{$key+1}} </td>
                                  <td> {{$row1->location_name}} </td>
                                  <td> {{$row1->location}} </td>
                                  <td  style="{{($row1->location_status==1)?'color:green':'color:red' }} ; font-size:18px"> {{$row1->location_status== 1?"Active":"Inactive"}} </td>    
                                  <td>
                                    <!--button here-->
                                    <a class="btn btn-danger" href=" {{Route('admin-department.delete',$row1->id)}}" id="delete">Delete</a>
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
    
        <!--EXP-->

   
    
    </div>
</div>
<!-- /.content-wrapper -->




@endsection
