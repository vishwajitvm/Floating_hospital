@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Add Department</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('admin-department.store')}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="department_name" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department Status </h5>
                                        <div class="controls">
                                            <select name="department_status"  class="form-control">
                                                <option value="1"  selected> Active </option>
                                                <option value="0" > Inactive </option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>
                            <!--row Ended here-->

                        </div>
                         </div>                           
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
                   </div>
                 </div>
               </div>
             </div>
   
        </section>

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
                                  <th>Email</th>
                                  <th> Department Status </th>
                                  <th width="10%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($data2 as $key => $row1)
                              <tr>
                                  <td> {{$key+1}} </td>
                                  <td> {{$row1->department_name}} </td>
                                  <td  style="{{($row1->department_status ==1)?'color:green':'color:red' }} ; font-size:18px"> {{$row1->department_status == 1?"Active":"Inactive"}} </td>    
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
