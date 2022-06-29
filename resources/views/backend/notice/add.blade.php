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
                 <h4 class="box-title">Add Notice</h4>
                 <a href=" {{ route('manage-notice.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Notices </a>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action=" {{Route('manage-notice.store')}} " enctype="multipart/form-data">  <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6 display-block"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Notice Date <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="notice_date" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Attachments </h5>
                                        <div class="controls">
                                            <input type="file" multiple name="notice_attachments[]" accept="image/png, image/jpeg, image/jpg, application/pdf,video/mp4" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <label>Notice Content</label>
                                        <textarea rows="5" cols="5" name="notice_content" class="form-control" placeholder="Enter Notice Detail"></textarea>
                                    </div>
                                </div><!--col-6 Ended here-->




                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Notice Status </h5>
                                        <div class="controls">
                                            <select name="notice_status"  class="form-control">
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

<style>
    ::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }
    </style>

@endsection
