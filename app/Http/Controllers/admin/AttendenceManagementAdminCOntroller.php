<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\Department ;
use App\Models\employee_attendance ;
use App\Models\new_user ;
use App\Models\location ;

class AttendenceManagementAdminCOntroller extends Controller
{
    //add
    public function AddAddendenceOfEmployee() {
        $datauser = new_user::all() ;
        $data2 = location::all() ;
        $datadepartment = Department::all() ;
        return view('backend.user_attendence.add' ,compact(['datauser' , 'datadepartment' , 'data2'])) ;
    }

    //store
    public function StoreAttendence(Request $request) {
        $data  = new employee_attendance() ;
        $data->todays_date = $request->todays_date ;
        $data->employee_department = $request->employee_department ;
        $data->employee_name = $request->employee_name ;
        // $data->employee_email = $request->employee_email ;
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
        $user = new_user::all()->count() ;
        $data = employee_attendance::latest()->get();
        return view('backend.user_attendence.viewall' ,compact(['data' , 'user'])) ;
    }

    //view todays attendence
    public function ViewTodaysAttendence() {
        $currentDate = date('Y-m-d');
        $user = new_user::all()->count() ;
        $data = employee_attendance::all()->where('todays_date' , '>=' , $currentDate);
        return view('backend.user_attendence.viewall' ,compact(['data' , 'user'])) ;
        
    }

    //AJAX REQUESTS
    public function AJAXgetEmployeeDataBasedOnDepartment(Request $request) {
        $depData = $request->post('depData') ;  //Department name
        $LocationDepartment = $request->post('LocationDepartment') ; //location name
        $data = new_user::all()->where('user_department' , $depData)->where('user_department_location' , $LocationDepartment) ;
        foreach ($data as $key=>$row) {
            $html = 
            '<div class="col-7">
            <div class="form-group">
             <h5 style="color: rgb(235, 72, 72); font-weight:bold"> '.  $row->name  .' </h5>
             <input type="hidden" name="employee_name[]" value="'. $row->name .'">
                 <div class="controls">
                     <select name="employee_attendence[]"  class="form-control">
                         <option value="onsite">Onsite </option>
                         <option value="Offsite">Offsite </option>
                         <option value="Absent">Absent </option>
                     </select>
                 </div>
             </div>
         </div>' ;
            echo $html;
        }

    }
}
