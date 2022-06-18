<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=" {{asset('backend/images/logo/logo.png')}} ">
    <title>Floating Hospital - Admin Panel</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
  <script src=”//ajax.googleapis.com/ajax/libsjquery/1.11jquery.mins.js”></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

  <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
 
  <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>

     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

    <!--header-->
    @include('admin.body.header')
    <!--header--> 

  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  
  @yield('admin')
  
  <!-- /.content-footer -->
  @include('admin.body.footer')
  <!-- /.content-footer -->



  
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
  <!--sk editor scripts--> 
  <script src="{{asset('../assets/vendor_components/ckeditor/ckeditor.js') }}"></script> <!--ckeditor-->
	<script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
	<script src="{{ asset('backend/js/pages/editor.js') }}"></script>
  <script src="{{asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>

  <script src="{{asset('../assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <script src="{{asset('backend/js/pages/advanced-form-element.js')}}"></script>
  <script src="{{asset('../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

  <!--calender-->
  <script src="{{asset('../assets/vendor_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('../assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/fullcalendar/lib/moment.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/calendar.js')}}"></script>


	

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
