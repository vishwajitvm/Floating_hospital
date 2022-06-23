<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Department ;
use App\Models\location ;

class ManageDepartmentController extends Controller
{
    //add
    public function DepartmentManagementADMIN() {
        $data = User::all() ;
        $data2 = Department::latest()->get() ;
        $data3 = location::all() ;
        return view('backend.department.add' , compact(['data' , 'data2' , 'data3'])) ;
    }

    //store departments data
    public function StoreDepartment(Request $request) {
        //validations
        $validated = $request->validate([
            'department_location' => 'required',
            'department_name' => 'required',
        ]);

        $data = new Department() ;
        $data->department_location = $request->department_location ;
        $data->department_name = $request->department_name ;
        $data->department_status = $request->department_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->department_name is Added successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-department.add')->with($notification) ;
    }

    //delete 
    public function DeleteDepartment($id) {
        $user = Department::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Selected Department Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-department.add')->with($notification) ;

    }
}
