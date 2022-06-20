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
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th width="5%">SL</th>
                                  <th width="10%">Date</th>
                                  <th> Department </th>
                                  <th> Employee Attendence </th>
                                  {{-- <th width="2%"> Total Employee </th> --}}
                                  <th width="2%"> Total present </th>
                                  <th width="2%"> total absent </th>
                                  <th width="10%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $key => $row1)
                              <tr>
                                  <td> {{$key+1}} </td>
                                  <td>  {{ date('jS F Y' , strToTime($row1->todays_date)) }} </td>
                                  <td> {{ $row1->employee_department }} </td>
                                  <!--exp-->
                                  <td>
                                            <div class="row">
                                                <div class="col-md-3 m-0 p-0">
                                                    <div class="list-group">
                                                      <a  class="list-group-item list-group-item-action active">
                                                         Name
                                                      </a>
                                                      
                                                      @empty($row1->employee_name)
                                                      <span class="list-group-item list-group-item-action disabled"> N/A </span>
                                                      @else
                                                      @foreach ($row1->employee_name as $item)
                                                      <span class="list-group-item list-group-item-action disabled"> {{ $item }} </span>
                                                      @endforeach
                                                      @endempty
                                                    </div>
                                                  </div>

                                                 
                                  
                                                  <div class="col-md-4 m-0 p-0">
                                                    <div class="list-group">
                                                      <a href="#" class="list-group-item list-group-item-action active">
                                                        Attendence
                                                      </a>
                                                      
                                                      @empty($row1->employee_attendence)
                                                      <span class="list-group-item list-group-item-action disabled"> N/A </span>
                                                      @else
                                                      @foreach ($row1->employee_attendence as $freq)
                                                      <span class="list-group-item list-group-item-action disabled"> {{ $freq }} </span>
                                                      @endforeach
                                                      @endempty
                                                     
                                                    </div>
                                                  </div>
                                            </div>
                              
                                  </td>
                                  <!--exp-->
                                  {{-- <td> {{ $user }} </td> --}}
                                  {{-- <td> 0 </td> --}}
                                  <td> 0 </td>

                                  <!--experiment-->
                                  <td>
                                    @if ( array_key_exists("Absent", $row1->employee_attendence ) )
                                      key exist
                                    @else
                                        null
                                    @endif

                                  </td>
                                  <!--experiment-->

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
