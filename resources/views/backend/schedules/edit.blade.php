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
                 <h4 class="box-title">Edit  Schedules</h4>
                 <a href=" {{ route('manage-location.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Location </a>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('manage-schedule.update',$data->id)}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	
                               <!--row Stared here-->

                               <div class="form-group">
                                <h5>Date <span class="text-warning">  </span></h5>
                                <div class="controls">
                                    <input type="date" name="schedule_date" value="{{ $data->schedule_date }}" class="form-control"  aria-invalid="false"> </div>
                            </div>


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>LIC DHS <span class="text-warning"> ( 3 MEDICAL PROVIDERS ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="LIC_dhs_3medical_total" value="{{ $data->LIC_dhs_3medical_total }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>LIC CHC <span class="text-warning">( 1 MEDICAL PROVIDERS ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="lic_chc_1medical_total" value="{{ $data->lic_chc_1medical_total }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>HELP MORRIS <span class="text-warning"> ( Medical ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="help_moris_medical" value="{{ $data->help_moris_medical }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>HELP MORRIS <span class="text-warning">( BH ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="help_moris_bh" value="{{ $data->help_moris_bh }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>


                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>QUEENSBRIDGE <span class="text-warning"> ( Total ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="queenbridge_total" value="{{ $data->queenbridge_total }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>ASTORIA <span class="text-warning">( Total ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="astoria_total" value="{{ $data->astoria_total }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <hr>


                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>DENTAL <span class="text-warning"> ( DHS ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="dental_dhs" value="{{ $data->dental_dhs }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>DENTAL <span class="text-warning">( CHC ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="denatl_chc" value="{{ $data->denatl_chc }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>PODIATRY <span class="text-warning"> ( Total ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="podiatry_total" value="{{ $data->podiatry_total }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>ID Clinic <span class="text-warning">( Total ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="id_clinic_total" value="{{ $data->id_clinic_total }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>BEHAVIORAL HEALTH <span class="text-warning"> ( CHC Telehealth ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="behavioral_chc_telehelth" value="{{ $data->behavioral_chc_telehelth }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>BEHAVIORAL HEALTH <span class="text-warning">( CHC In Person ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="behavioral_chc_inperson" value="{{ $data->behavioral_chc_inperson }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>BEHAVIORAL HEALTH <span class="text-warning"> ( DHS Telehealth ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="behavioral_dhs_telehelth" value="{{ $data->behavioral_dhs_telehelth }}" class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>BEHAVIORAL HEALTH <span class="text-warning">( DHS In Person ) </span></h5>
                                        <div class="controls">
                                            <input type="text" name="behavioral_dhs_inperson" value="{{ $data->behavioral_dhs_inperson }}" class="form-control" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>



                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Department Status </h5>
                                        <div class="controls">
                                            <select name="schedule_status"  class="form-control">
                                                <option value="1"  {{  $data->schedule_status == '1'?"selected":""}}> Active </option>
                                                <option value="0" {{  $data->schedule_status == '0'?"selected":""}}> Inactive </option>
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

        <style>
            hr{
                background-color: #ccc;
            }
        </style>


   
    
    </div>
</div>
<!-- /.content-wrapper -->

<style>
::-webkit-calendar-picker-indicator {
    filter: invert(1);
}
</style>




@endsection
