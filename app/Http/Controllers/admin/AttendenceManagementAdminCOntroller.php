<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\Department ;
use App\Models\employee_attendance ;

class AttendenceManagementAdminCOntroller extends Controller
{
    //add
    public function AddAddendenceOfEmployee() {
        $datauser = User::all()->where('usertype' , 'user') ;
        $datadepartment = Department::all() ;
        return view('backend.user_attendence.add' ,compact(['datauser' , 'datadepartment'])) ;
    }

    //store
    public function StoreAttendence(Request $request) {
        $data  = new employee_attendance() ;
        $data->todays_date = $request->todays_date ;
        $data->employee_department = $request->employee_department ;
        $data->employee_name = $request->employee_name ;
        $data->employee_email = $request->employee_email ;
        $data->employee_attendence = $request->employee_attendence ;
        $data->save() ;
        $notification = array(
            'message' => "$request->todays_date Attenndence updated successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('attendence-management.add')->with($notification) ;
    }

    //view all 
    public function ViewallUsersattendence() {
        $data = employee_attendance::latest()->get();
        return view('backend.user_attendence.viewall' ,compact(['data'])) ;
    }
}
