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
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="usertype" id="select" required class="form-control">
                                                <option value="" selected="" disabled>Select Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>

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

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                                                          <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>User Mobile<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="mobile" class="form-control"  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>User Address <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="address" class="form-control"  required> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->
  
                             
  
                                <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>User Gender <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <select name="gender" id="gender" required  class="form-control">
                                                  <option value="" selected="" disabled>Select Gender</option>
                                                  <option value="Male" >Male</option>
                                                  <option value="Female"   >Female</option>
                                                  <option value="other" >other</option>
  
                                              </select>
                                          </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <!---******NEW DATA **** -->
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Date Of Birth <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="date" name="birth_date" class="form-control"   > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Your Gmail Address <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="gmail_address" class="form-control" >
                                           </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                                  
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Your Facebook Profile <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="facebook_profile" class="form-control"  > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Your Instagram Profile <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="instagram_profile" class="form-control"  > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Your linkdine Profile <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="linkdine_profile" class="form-control"  > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>How you hear about our party <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <select name="hear_about_party" id="hear_about_party" required  class="form-control">
                                                  <option value="" selected="" disabled>---Select Any---</option>
                                                  <option value="Friends"  > Friends </option>
                                                  <option value="Newspaper" > Newspaper </option>
                                                  <option value="Facebook"  > Facebook </option>
                                                  <option value="Instagram" > Instagram </option>
                                                  <option value="Internet-search" > Internet-search </option>
                                                  <option value="Blog"  > Blog </option>
                                                  <option value="LBB" > LBB </option>
                                              </select>
                                          </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>What are your expections from aragma? <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="expectation_from_aragma"  class="form-control"  > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>What is Your Tallent ? <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="user_tallent" class="form-control"   > </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                                  <!--*****new data end here**--->
                                  
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Profile Image <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="file" name="image" class="form-control" id="image"   > </div>
                                      </div>
  
                                      <!--image display after selecting UISNG AJEX-->
                                      <div class="form-group">
                                          <div class="controls">
                                              <img id="showImage" src="{{ (!empty($data->image))?url('upload/user_images/'.$data->image):url('upload/no_image.jpg') }}" alt="" style="width: 100px;height:100px;border:2px solid black">
                                          </div>
                                      </div>
                                      <!--image display ended here-->
  
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



@endsection
