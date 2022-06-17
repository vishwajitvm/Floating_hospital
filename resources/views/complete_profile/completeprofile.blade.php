<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href=" {{asset('backend/images/faviconnew.png')}} ">
        <title>Aragma - Complete Profile</title>
        
        <!-- Vendors Style-->
        <link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
          
        <!-- Style-->  
        <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
    
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    
      <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
     
      <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
    
         
      </head>
    
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

  {{-- @include('users_dashboard.body.header') --}}
  
  <!-- Left side column. contains the logo and sidebar -->
<!--active sidbar menu functionality -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}
<!--end active sidebar functionality here-->

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{Route('userdashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt="">
						  {{-- <h3><b> Unicorn </b> Admin</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'completeprofile')?'active':'' }}">
          <a href="{{Route('completeprofile')}}">
            <i data-feather="pie-chart"></i>
			<span>Pending Profile</span>
          </a>
        </li> 
        
        <li>
            <a href="{{Route('completeprofile.logout')}}">
              <i data-feather="lock"></i>
              <span>Log Out</span>
            </a>
          </li>
		
        
      </ul>
    </section>
	
	
  </aside>  <!--side bar end here-->

  <!-- Content Wrapper. Contains page content -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->
  
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <div class="container-full">
        
  
          <!-- Main content -->
          <section class="content">
  
              <!-- Basic Forms -->
               <div class="box">
                 <div class="box-header with-border">
                   <h4 class="box-title">Complete Your Profile to get varified</h4>
                   <h6 class="box-subtitle"> Post Completion of the profile, we'll send you the invite to our upcoming event and also you can access to your user dashboard. </h6>
                   {{-- <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a> --}}
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                   <div class="row">
                     <div class="col">
                         <form novalidate method="POST" action=" {{Route('completeprofile.store') }} " enctype="multipart/form-data" > <!--form-->
                          @csrf
                           <div class="row">
                             <div class="col-12">	
  
  
                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>User Name<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="name" class="form-control" value=" {{ $user->name }} "  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
  
                                  <div class="col-md-6"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>User Email<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="email" name="email" class="form-control" value=" {{ $user->email }} "  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->
                             </div>
                           </div>
  
  
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
  
    <!-- /.content-wrapper -->

  <!--include footer-->
  @include('users_dashboard.body.footer')
  <!--footer end here-->


  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>	
	<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
  <!--sk editor scripts--> {{ asset('') }}
  <script src="{{asset('../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
	<script src="{{ asset('backend/js/pages/editor.js') }}"></script>

  <!--ck editor scripts-->

  <!--dropzone-->
  <script src=" {{asset('../assets/vendor_components/dropzone/dropzone.js')}} "></script>

  <!--dropzone-->
	

	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>

	<!-- Sunny Admin App -->
	<script src="{{asset('backend/js/template.js')}}"></script>
	<script src="{{asset('backend/js/pages/dashboard.js')}}"></script>

  <!--sweet alert cdn here-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript">
  $(function() {
    $(document).on('click' , '#delete' ,function(e) {
      e.preventDefault() ;
      var link = $(this).attr("href") ;
      //sweetalert 
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      //sweetalert
    }) ;
  })
  </script>



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;


    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
	
	
</body>
</html>
