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
                 <h4 class="box-title">Update User</h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('users.update',$editData->id)}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->

                                    <div class="form-group">
                                        <h5>Location <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="user_department_location" id="select_locationsss" required class="form-control">
                                                <option  selected="" disabled>Select Location</option>
                                               @foreach ($data2 as $itemz)
                                               <option value="{{ $itemz->location_name }} " {{ $editData->user_department_location == $itemz->location_name? "Selected": "" }} > {{ $itemz->location_name }} </option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-12">	
                                    <!--row Stared here-->
                                 <div class="row">
                                     <div class="col-md-12"><!--col-6 stared here-->
                                         <div class="form-group">
                                             <h5>Department <span class="text-danger">*</span></h5>
                                             <div class="controls">
                                                 <select name="user_department"  id="departmentDatass" required  class="form-control">
                                                     <option value="" selected="" disabled>Select Department</option>

                                                     @foreach ($data as $itemss)
                                                     <option value="{{ $itemss->department_name }}" {{ $editData->user_department == $itemss->department_name ? "Selected": "" }} > {{ $itemss->department_name }} </option>

                                                     @endforeach
     
                                                 </select>
                                             </div>
                                         </div>
                                     </div><!--col-6 Ended here-->
     

                                

                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" value=" {{$editData->name}} " required> </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <style>
                                    ::-webkit-calendar-picker-indicator {
                                        filter: invert(1);
                                    }
                                </style>






                                

                                
                            </div>
                            <!--row Ended here-->

                           </div>
                         </div>
                           
                           
                           
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Update">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#select_locationsss").change(function() {
            let locationName = $(this).val() ;
            // alert(depData) ;
            jQuery.ajax({
                url: '/ajax-get-departments',
                type: 'post',
                data: 'locationName='+locationName+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#departmentDatass').html(result) ;
                }
            })
        })
    })
</script>

@endsection
