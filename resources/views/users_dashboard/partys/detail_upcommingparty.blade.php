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
                <div class="box-body">
                    <div class="row">
   
                       <div class="col-12 m-0 p-0">
                           <img src="{{ url('upload/party_banner_img/'. $detailPartyData->party_banner_image)}}" alt="Card image cap" alt="..." style="width: 100% ; height:500px ; object-fit: cover;">
                       </div>


                      <!-- /.col -->
                    </div>

                    <div class="row" style="padding: 20px 0px">
                        <!--data card here-->
                            
                         <div class="col-sm-3 shadowcard" >
                           <div class="card" style="padding: 20px 0px ; background: #6a425c" >
                             <div class="card-body" >
                               <div class="row">
                                 <div class="col-4">
                                     <b> <i class=" ti-calendar hovercolor" style="font-size: 80px"></i> </b>
                                 </div>
                                 <div class="col-8">
                                     <h4 class=" text-uppercase font-weight-bold" > &nbsp;  Date</h4>
                                     <p class="card-text"><b> <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ date('jS F Y' , strToTime($detailPartyData->party_starting_date)) }}  </p>
                                     
                                     <p class="card-text"><b> <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ date('jS F Y' , strToTime($detailPartyData->party_ending_date)) }} </p>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>

                         <div class="col-sm-3 shadowcard">
                             <div class="card" style="padding: 20px 0px; background: #6a425c">
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-4">
                                       <b> <i class=" ti-time hovercolor"  style="font-size: 80px"></i> </b>
                                   </div>
                                   <div class="col-8">
                                       <h4 class=" text-uppercase font-weight-bold" > &nbsp;  Time</h4>
                                       <p class="card-text"><b> <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ $detailPartyData->party_starting_time }} Hours  </p>
                                       
                                       <p class="card-text"><b>  <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ $detailPartyData->party_ending_time }} Hours </p>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>

                         <div class="col-sm-3 shadowcard">
                             <div class="card" style="padding: 20px 0px; background: #6a425c">
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-4">
                                       <b> <i class=" ti-wallet hovercolor"  style="font-size: 80px"></i> </b>
                                   </div>
                                   <div class="col-8">
                                       <h4 class=" text-uppercase font-weight-bold" > &nbsp;  Party Fees</h4>
                                       <p class="card-text"><b>  <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ $detailPartyData->party_fees }} INR  </p>
                                       
                                       <p class="card-text"><b> <i class=" ti-angle-double-right"></i> Discount:&nbsp;</b> {{ $detailPartyData->party_discount }} INR </p>  
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>

                           <div class="col-sm-3 shadowcard">
                             <div class="card" style="padding: 20px 0px ; background: #6a425c">
                               <div class="card-body">
                                 <div class="row">
                                   <div class="col-4">
                                       <b> <i class="  ti-location-pin hovercolor"  style="font-size: 80px"></i> </b>
                                   </div>
                                   <div class="col-8">
                                       <h4 class=" text-uppercase font-weight-bold" > &nbsp;  Location</h4>
                                       <p class="card-text"><b>  <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ $detailPartyData->party_city }}  </p>
                                       <p class="card-text"><b>  <i class=" ti-angle-double-right"></i>&nbsp;</b> {{ $detailPartyData->party_location }}

                                        @if ($detailPartyData->party_location == null)
                                        <span style="color: gray" > Provide soon </span>
                                    @else
                                     {{ $detailPartyData->party_location }} </b>
                                    @endif
                                    </p>

                                       
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>

                        <!--data card here-->
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background: #1f212500">
                                <div class="card-body">
                                  <h2 class="card-title text-uppercase hovercolor2" style="text-decoration: bolder; "> {{ $detailPartyData->party_name }} </h2>
                                  <h6 class="card-subtitle mb-2 text-muted"> <i class=" ti-user"></i>&nbsp; {{ $detailPartyData->party_hosted_by }} </h6> <br>
                                  <p class="card-text" style="font-size: 20px"> {{ $detailPartyData->party_description }} </p> <br>

                                  <h2 class="card-title test-uppercase"> Party Includes </h2> <br>

                                  @php
                                       $datapartyinclude = explode(',' , $detailPartyData->party_includes) 
                                    @endphp

                                    @foreach ($datapartyinclude as $item)
                                    <p class="card-text " style="font-size: 20px"> 
                                        &nbsp;&nbsp;&nbsp;<i class="ti-angle-double-right"></i>&nbsp; <span class="hovercolor2">{{ $item }}</span>
                                    </p>
                                    @endforeach

                                  

                                  
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="row"> <!--gallary here-->
                       
                        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">

                        <div class="gallery">
                            {{-- <div class="gallery__column">
                                <a href="https://unsplash.com/@jeka_fe" target="_blank" class="gallery__link">
                                    <figure class="gallery__thumb">
                                        <img src="https://source.unsplash.com/_cvwXhGqG-o/300x300" alt="Portrait by Jessica Felicio" class="gallery__image">
                                        <figcaption class="gallery__caption">Portrait by Jessica Felicio</figcaption>
                                    </figure>
                                </a>
                            </div> --}}

                            <!--gallary here-->
                                @php
                                $imgData = explode('|' , $detailPartyData->party_gallary_images)
                                @endphp

                                @foreach ($imgData as $item)
                                <div class="gallery__column">
                                    <span  target="_blank" class="gallery__link">
                                        <figure class="gallery__thumb">
                                            <img src="{{ URL::to($item) }}" alt="Portrait by Jessica Felicio" class="gallery__image">
                                            <figcaption class="gallery__caption"> {{ $detailPartyData->party_name }} Best Moments </figcaption>
                                        </figure>
                                    </span>
                                </div>
                                @endforeach
                            <!--gallary here-->
                            
                        </div>

                    </div> <!--row end here-->


                    <!-- /.row -->
                  </div>
               </div>
               <!-- /.box-header -->
               
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
<style>
    .hovercolor{
        font-weight: 400 ;
    }
    .hovercolor:hover{
        background-image: linear-gradient(to bottom right, red, yellow);
        transition: 1s ease ;

        -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
    }


    .hovercolor2{
        font-weight: 400 ;
    }
    .hovercolor2:hover{
        background-image: linear-gradient(to bottom right, red, yellow);
        transition: 1s ease ;
        -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
    }
    .hovercolor2:hover{
        font-weight: 600;
        transition: 1s ease
    }

    
</style>



{{-- <style>
    .shadowcard:hover{
        box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.6);
    }
</style> --}}

<style>
.gallery {
  display: flex;
  padding: 2px;
  transition: 0.3s;
}
.gallery:hover .gallery__image {
  filter: grayscale(1);
}
.gallery__column {
  display: flex;
  flex-direction: column;
  width: 25%;
}
.gallery__link {
  margin: 2px;
  overflow: hidden;
}
.gallery__link:hover .gallery__image {
  filter: grayscale(0);
}
.gallery__link:hover .gallery__caption {
  opacity: 1;
}
.gallery__thumb {
  position: relative;
}
.gallery__image {
  display: block;
  width: 100%;
  transition: 0.3s;
}
.gallery__image:hover {
  transform: scale(1.1);
}
.gallery__caption {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 25px 15px 15px;
  width: 100%;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  color: white;
  opacity: 0;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
  transition: 0.3s;
}
</style>




@endsection
