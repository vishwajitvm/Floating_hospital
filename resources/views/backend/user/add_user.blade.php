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
                 <h4 class="box-title">Add User</h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('users.store')}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->
                            <div class="row">
                                

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


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="user_department" id="departmentData" required class="form-control">
                                                <option value="" selected="" disabled>Select Department</option>
                                               {{-- @foreach ($data as $item)
                                               <option value="{{ $item->department_name }} "> {{ $item->department_name }} </option>
                                               @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required> </div>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
                    jQuery('#departmentData').html(result) ;
                }
            })
        })
    })
</script>




@endsection
