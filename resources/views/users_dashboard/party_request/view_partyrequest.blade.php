@extends('users_dashboard.user_master')
@section('user')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Party Requests</h3>
                {{-- <a href=" {{ route('mainmachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine </a> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table dataTable table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Party Name </th>
                              <th> Your Contribution </th>
                              <th> Your Phone Number </th>
                              <th> Your Special Message </th>
                              <th> Your Request Status </th>
                              <th width="15%">Party Details</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($PartyDataView as $key => $data)
                          <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $data->request_party_name }} </td>
                              <td> 
                                @php
                                $datapartyinclude = explode(',' , $data->user_party_contribution) 
                             @endphp
                             @foreach ($datapartyinclude as $item)
                              <p> {{ Str::title($item) }} </p>
                             @endforeach
                              </td>

                                <td> {{ $data->user_party_request_userphoneno2 }}  </td>
                                <td> {{ Str::limit($data->party_request_special_message, 600) }}  </td>
                                
                                @if ($data->user_party_request_status == null)
                                <td>
                                    <span class="badge badge-pill badge-warning" style="background: gray">No Response</span>
                                </td>
                                @elseif($data->user_party_request_status == "approve")
                                <td>
                                    <span class="badge badge-pill badge-warning" style="background: green">Approved</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge badge-pill badge-warning" style="background: red">denied</span>
                                </td>
                                @endif

                                <td>
                                <!--button here-->
                                <a class="btn  btn-block btn-info " href=" {{Route('userpartyrequest.requestpartydetails',$data->id)}} ">Party Details</a>
                              </td>
                          </tr>
                        @endforeach

                      </tbody>


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
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
