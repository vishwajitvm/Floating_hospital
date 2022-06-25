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
                 <h4 class="box-title">Add Employee Videos</h4>
                 <a href=" {{ route('manage-employee-videos.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Employee Videos </a>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('manage-employee-videos.store')}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Video Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="emp_video_name" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Video Url</h5>
                                        <div class="controls">
                                            <input type="url" placeholder="https://" name="emp_video_url" class="form-control" aria-invalid="false">
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->



                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department Status </h5>
                                        <div class="controls">
                                            <select name="employee_status"  class="form-control">
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
   
    
    </div>
</div>
<!-- /.content-wrapper -->




@endsection
