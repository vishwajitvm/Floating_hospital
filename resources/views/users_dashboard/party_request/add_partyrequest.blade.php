@extends('users_dashboard.user_master')
@section('user')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Request For Party</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('userpartyrequest.store')}} " enctype="multipart/form-data" > <!--form-->
                        {{-- {{Route('adminparty.store')}}  --}}
                        @csrf  
                         <div class="row">
                           <div class="col-12">	
                            <!--row Stared here-->
                            <div class="row">

                                <input type="text" name="user_party_request_username" value=" {{ $user->name }} " required  class="form-control"   aria-invalid="false" hidden> 

                                <input type="email" name="user_party_request_useremail" value=" {{ $user->email }} " required  class="form-control"   aria-invalid="false" hidden> 

                                <input type="text" name="user_party_request_userphoneno1" value=" {{ $user->mobile }} " required  class="form-control"   aria-invalid="false" hidden> 

                                
                                <div class="box-body">
                                    <div class="form-group form-group-float">
                                        <label class="form-group-float-label">Select Party</label>
                                        <select class="form-control" name="Request_party_name">
                                            <option value="" selected="">Select party</option>
                                            @foreach ($partyData as $item)
                                            <option value="{{ $item->party_name }}"> {{ $item->party_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!--check box start here -->
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="box-body">
                                            <label class="form-group-float-label">Your Contribution into party</label> <br>
                                            <div class="demo-checkbox">
                                                @foreach ($includeinparty as $item)
                                                <input type="checkbox" id="{{$item}}" name="user_party_contribution[]" value="{{ $item }}" class="filled-in chk-col-success"  />
                                                <label for="{{ $item }}"> {{ $item }} </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                  <div class="form-group">
                                      <h5> Your Phone Number  </h5>
                                      <div class="controls">
                                          <input type="number" name="user_party_request_userphoneno2"  class="form-control"   aria-invalid="false"> 
                                      </div>
                                  </div>
                              </div><!--col-6 Ended here-->

                              <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Special Message </h5>
                                    <div class="controls">
                                        <textarea name="party_request_special_message" id="party_request_special_message" class="form-control"  rows="5"></textarea>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->


                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>


                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                               {{-- <button type="submit" class="btn btn-info btn-rounded mt-10">Submit</button> --}}

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
