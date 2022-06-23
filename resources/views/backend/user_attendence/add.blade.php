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
                       <form novalidate method="POST" action="{{Route('attendence-management.store')}}"> <!--form   action="  "  -->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="todays_date" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Location <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="user_department_location" id="select_location" required class="form-control">
                                                <option  selected="" disabled>Select Location</option>
                                               @foreach ($data2 as $item)
                                               <option value="{{ $item->location_name }} "> {{ $item->location_name }} </option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department </h5>
                                        <div class="controls">
                                            <select name="employee_department" id="departmentdata"  class="form-control">
                                                <option selected disabled>Select Department</option>
                                                @foreach ($datadepartment as $item1)
                                                <option value="{{ $item1->department_name }}" > {{ $item1->department_name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>
                            <!--row Ended here-->
                            <br><br>

                            <div class="row" id="returndata">

                                @foreach ($datauser as $item)
                                <div class="col-4">

                                   <div class="form-group">
                                    <h5>{{ $item->name }} </h5>
                                    <input type="hidden" name="employee_name[]" value="{{ $item->name }}">
                                        <div class="controls">
                                            <select name="employee_attendence[]"  class="form-control">
                                                <option value="onsite">Onsite </option>
                                                <option value="Offsite">Offsite </option>
                                                <option value="Absent">Absent </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                   @endforeach

                            </div>

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
 
    
    </div>
</div>
<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#departmentdata").change(function() {
            let depData = $(this).val() ;
            let LocationDepartment = $("#select_location").find(":selected").text() ;
            // alert(LocationDepartment) ;
            jQuery.ajax({
                url: '/ajax-get-department-data',
                type: 'post',
                data: 'depData='+depData+ '&LocationDepartment='+LocationDepartment+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#returndata').html(result) ;
                }
            })
        })
    })
</script>

<script>
    $(document).ready(function() {
        $("#select_location").change(function() {
            let locationName = $(this).val() ;
            // alert(depData) ;
            jQuery.ajax({
                url: '/ajax-get-departments',
                type: 'post',
                data: 'locationName='+locationName+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#departmentdata').html(result) ;
                }
            })
        })
    })
</script>






@endsection
