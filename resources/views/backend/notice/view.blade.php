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
                    <h3 class="box-title">Notice List</h3>
                    <a href=" {{ route('manage-notice.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Notice </a>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th >SL</th>
                                  <th>Notice Date</th>
                                  <th>Notice Content </th>
                                  <th> Attachments </th>
                                  <th> Notice status </th>
                                  <th width="10%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $key => $row1)
                              <tr>
                                  <td> {{$key+1}} </td>
                                  <td> <span class="bg-info px-2 py-2">{{ date('jS F Y' , strToTime($row1->notice_date))}}</span> </td>
                                  <td> {{$row1->notice_content}} </td>
                                  <td>
                                    @php
                                    $imgData = explode('|' , $row1->notice_attachments)
                                @endphp
                                @foreach ($imgData as $item)
                                    <div class="row">
                                      <div class="col-6">
                                        <embed src="{{ URL::to($item) }}" type="" style="width: 200px ; height:200px ; margin:2px">
                                      </div>
                                      <div class="col-6  my-auto"><span> <a href="{{ URL::to($item) }}" class="bg-success px-4 py-2 " target="_blank">Click to View</a> </span></div>
                                    </div>
                                @endforeach
                                  </td>
                                  <td  style="{{($row1->notice_status==1)?'color:green':'color:red' }} ; font-size:18px"> {{$row1->notice_status== 1?"Active":"Inactive"}} </td>    
                                  <td>
                                    <!--button here-->
                                    <a class="btn btn-danger" href=" {{Route('admin-department.delete',$row1->id)}}" id="delete">Delete</a>
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
    
        <!--EXP-->

   
    
    </div>
</div>
<!-- /.content-wrapper -->




@endsection
