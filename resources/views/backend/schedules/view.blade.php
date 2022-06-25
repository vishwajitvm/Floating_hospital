@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">

        <!--exp -->
        <section class="content">
            <div class="row">
              <div class="col-12">
               <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Schedules List</h3>
                    <a href=" {{ route('manage-schedule.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Schedules </a>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                        <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" width="2%">S.no.</th>
                                    <th rowspan="2" width="10%"> Date</th>
                                    <th colspan="1" bgcolor="#f49ffb">LIC DHS</th>
                                    <th colspan="1" bgcolor="#f49ffb"> LIC CHC </th>
                                    <th colspan="2" bgcolor="#a688fa">HELP MORRIS</th>
                                    <th colspan="1" bgcolor="#678df7">QUEENSBRIDGE</th>
                                    <th colspan="1" bgcolor="#c6ff93" class="text-dark">ASTORIA</th>
                                    <th colspan="2" bgcolor="#eafd7b" class="text-dark"> DENTAL </th>
                                    <th colspan="1" bgcolor="#04f0fc">PODIATRY</th>
                                    <th colspan="1" bgcolor="#f6a8a8">ID Clinic</th>
                                    <th colspan="4" bgcolor="#c2c4c6">PODIATRY</th>
                                    <th rowspan="2">Action</th>
                                  
                                </tr>
                                <tr>
                                    <th>3 MEDICAL PROVIDERS</th>
                                    <th>1 MEDICAL PROVIDER</th>
                                    <th>Medical</th>
                                    <th>BH</th>
                                    <th>Total</th>
                                    <th>Total</th>
                                    <th>DHS</th>
                                    <th>CHC</th>
                                    <th>Total</th>
                                    <th>Total</th>
                                    <th>CHC Telehealth</th>
                                    <th>CHC In Person</th>
                                    <th>DHS Telehealth</th>
                                    <th>DHS In Person</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td> {{ date('jS F Y' , strToTime($item->schedule_date)) }}</td>
                                    <td> {{ $item->LIC_dhs_3medical_total!=null?$item->LIC_dhs_3medical_total:"0" }} </td>
                                    <td> {{ $item->lic_chc_1medical_total!=null?$item->lic_chc_1medical_total:"0" }} </td>
                                    <td> {{ $item->help_moris_medical!=null?$item->help_moris_medical:"0" }} </td>
                                    <td> {{ $item->help_moris_bh!=null?$item->help_moris_bh:"0" }} </td>

                                    <td> {{ $item->queenbridge_total?$item->queenbridge_total:"0" }} </td>
                                    <td> {{ $item->astoria_total?$item->astoria_total:"0" }} </td>
                                    <td> {{ $item->dental_dhs?$item->dental_dhs:"0" }} </td>
                                    <td> {{ $item->denatl_chc?$item->denatl_chc:"0" }} </td>
                                    <td> {{ $item->podiatry_total?$item->podiatry_total:"0" }} </td>
                                    <td> {{ $item->id_clinic_total?$item->id_clinic_total:"0"	 }} </td>
                                    <td> {{ $item->behavioral_chc_telehelth?$item->behavioral_chc_telehelth:"0" }} </td>
                                    <td> {{ $item->behavioral_chc_inperson?$item->behavioral_chc_inperson:"0" }} </td>
                                    <td> {{ $item->behavioral_dhs_telehelth?$item->behavioral_dhs_telehelth:"0" }} </td>
                                    <td> {{ $item->behavioral_dhs_inperson?$item->behavioral_dhs_inperson:"0" }} </td>
                                    <td>
                                        <a class="btn btn-info mt-2" href=" {{Route('manage-schedule.edit',$item->id)}} " id="edit">Edit</a> &nbsp;&nbsp;
                                        <a class="btn btn-danger mt-2" href=" {{Route('manage-schedule.delete',$item->id)}} " id="delete">Delete</a>
   
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th>S.no</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>Office</th>
                                    <th>Extn.</th>
                                    <th>E-mail</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
    
                
                <!-- /.box -->          
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
    
        <!--EXP-->

   
    
    </div>
</div>
<!-- /.content-wrapper -->




@endsection
