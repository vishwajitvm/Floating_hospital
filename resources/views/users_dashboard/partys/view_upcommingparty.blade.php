@extends('users_dashboard.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">
                   @if ($route == "userparty.missedparty")
                       Party You Missed
                   @else
                       Upcoming Party
                   @endif
                 </h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">

                    @foreach ($partyData as $key => $item)
                    

                  <div class="card ml-3 mr-3 bg-light" style="width: 25rem;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <img src="{{ url('upload/party_banner_img/'. $item->party_banner_image)}}" alt="Card image cap" alt="..." style="height: 200px">

                    <div class="card-body">
                      <h3 class="card-title">{{ Str::upper($item->party_name) }}  </h3> 
                      <span style="font-size: 12px ; color:gray ;"> <i class=" ti-user"></i> &nbsp; {{ $item->party_hosted_by }} </span> 
                      <br><br><h6 class="card-title"><i class="ti-arrow-circle-left"></i> &nbsp; {{ date('jS F' , strToTime($item->party_starting_date)) }} <b> - </b> {{ date('jS F' , strToTime($item->party_ending_date)) }} </h6>
                      <h6  class="card-title" ><i class=" ti-location-arrow"></i> &nbsp; {{ $item->party_city }} </h6>

                      <p class="card-text" > @if ($item->party_location == null)
                        <span style="color: gray" > Location will be shared 24hrs before the event </span>
                    @else
                    <b><i class=" ti-location-pin"></i> &nbsp; {{ $item->party_location }} </b>
                    @endif </p>

                    <p class="card-text" > <i class="ti-angle-double-right"></i> &nbsp; {{ Str::title(Str::limit($item->party_description, 200)) }}</p>
  
                      <a href="{{ Route('userparty.partyfulldetails' ,$item->id ) }}"  class="btn btn-primary btn-outline-secondary ">View Details</a>
                    </div>
                  </div>

                  @endforeach

                   
   
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
