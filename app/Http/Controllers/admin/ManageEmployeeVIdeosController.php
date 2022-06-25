<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_video ;


class ManageEmployeeVIdeosController extends Controller
{
    //add
    public function AddManageEmployeeVideos() {
        return view('backend.employee_videos.add') ;
    }

    //Store 
    public function StoreEmployeeVideos(Request $request) {
        $validatedData = $request->validate([
            'emp_video_name' => 'required',
            'emp_video_url' => 'required'
        ]) ;

        $data = new employee_video() ;
        $data->emp_video_name = $request->emp_video_name ;
        $data->emp_video_url = $request->emp_video_url ;
        $data->employee_status = $request->employee_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->emp_video_name Video Added successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('manage-employee-videos.add')->with($notification) ;
    }

    //view
    public function ViewEmployeeVIdeos() {
        $data = employee_video::latest()->get() ;
        return view('backend.employee_videos.view' , compact(['data'])) ;
    }

    //delete
    public function DeleteEmployeeVideos($id) {
        $user = employee_video::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'selected Video Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('manage-employee-videos.view')->with($notification) ;

    }
}
