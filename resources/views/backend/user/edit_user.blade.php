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
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="usertype" style="background:#6a425c ; " id="select" required  class="form-control">
                                                <option value="" selected="" disabled>Select Role</option>
                                                <option value="Admin" {{ $editData->usertype == "Admin" ? "Selected": "" }} >Admin</option>
                                                <option value="User" {{ $editData->usertype == "User" ? "Selected": "" }}  >User</option>

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                

                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" value=" {{$editData->name}} " required> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" value=" {{$editData->email}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Mobile<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="mobile" class="form-control" value=" {{$editData->mobile}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User address<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control" value=" {{$editData->address}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User gender <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" id="select" required  class="form-control">
                                                <option value="" selected="" disabled>Select Gender</option>
                                                <option value="Male" {{ $editData->status == "Male" ? "Selected": "" }} >Male</option>
                                                <option value="Female" {{ $editData->status == "Female" ? "Selected": "" }} >Female</option>
                                                <option value="other" {{ $editData->status == "other" ? "Selected": "" }} >other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Date Of Birth<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="birth_date" class="form-control"  value= {{$editData->birth_date}}  required="" aria-invalid="false"> </div>
                                    </div>
                                </div>
                                <style>
                                    ::-webkit-calendar-picker-indicator {
                                        filter: invert(1);
                                    }
                                </style>


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User gmail_address<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="gmail_address" class="form-control" value=" {{$editData->gmail_address}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User facebook_profile<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="facebook_profile" class="form-control" value=" {{$editData->facebook_profile}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User instagram_profile<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="instagram_profile" class="form-control" value=" {{$editData->instagram_profile}} " required="" aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User linkdine_profile<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="linkdine_profile" class="form-control" value=" {{$editData->linkdine_profile}} "  aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>How you hear about our party <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="hear_about_party" id="hear_about_party" required  class="form-control">
                                                <option value="" selected="" disabled>---Select Any---</option>
                                                <option value="Friends" {{ $editData->hear_about_party == "Friends" ? "Selected": "" }} > Friends </option>
                                                <option value="Newspaper" {{ $editData->hear_about_party == "Newspaper" ? "Selected": "" }} > Newspaper </option>
                                                <option value="Facebook" {{ $editData->hear_about_party == "Facebook" ? "Selected": "" }}  > Facebook </option>
                                                <option value="Instagram" {{ $editData->hear_about_party == "Instagram" ? "Selected": "" }} > Instagram </option>
                                                <option value="Internet-search" {{ $editData->hear_about_party == "Internet-search" ? "Selected": "" }} > Internet-search </option>
                                                <option value="Blog" {{ $editData->hear_about_party == "Blog" ? "Selected": "" }}  > Blog </option>
                                                <option value="LBB" {{ $editData->hear_about_party == "LBB" ? "Selected": "" }} > LBB </option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User expectation_from_aragma<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="expectation_from_aragma" class="form-control" value=" {{$editData->expectation_from_aragma}} "  aria-invalid="false"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User user_tallent<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="expectation_from_aragma" class="form-control" value=" {{$editData->user_tallent}} "  aria-invalid="false"> </div>
                                    </div>
                                </div>



                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Status <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="status" id="select" required  class="form-control">
                                                <option value="" selected="" disabled>Select Role</option>
                                                <option value="active" {{ $editData->status == "active" ? "Selected": "" }} >Active</option>
                                                <option value="inactive" {{ $editData->status == "inactive" ? "Selected": "" }} >Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                

                                
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

@endsection
