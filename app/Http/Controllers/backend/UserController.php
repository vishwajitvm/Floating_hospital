<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department ;
use App\Models\new_user ;
use App\Models\location ;

class UserController extends Controller
{
    //user VIEW
    public function UserView() {
        $data['allData'] = new_user::latest()->get() ;
        
       return view('backend.user.view_user' , $data) ;
    }

    //ADD users 
    public function UserAdd() {
        $data = Department::all() ;
        $data2 = location::all() ;
        return view('backend.user.add_user' , compact(['data' , 'data2'])) ;
    }

    //AJAX REQUEST TO GET DEPARTMENT DATA
    public function AJAXRrequestToGetDepartmentData(Request $request) {
        $locationName = $request->post('locationName') ;  //Department name
        $data121 = Department::all()->where('department_location' , $locationName) ;
        $html = '<option value="" selected="" disabled>----Select Department----</option>' ;
        foreach ($data121 as $key=>$row) {
            $html.= '<option value="'. $row->department_name .'" > '. $row->department_name .' </option>' ;
        } ;
        echo $html;
    } 

    //storing updated data
    public function UserStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
        ]) ;

        $data = new new_user() ;
        $data->user_department_location = $request->user_department_location ;
        $data->user_department = $request->user_department ;
        $data->name = $request->name ;
        $data->save() ;
        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('user.view')->with($notification) ;
    }

    //view user profile data here 
    //
    public function UserProfileDetailsData($id) {
        $data = new_user::find($id) ;
        return view('backend.user.view_userdetails' , compact('data')) ;

    }
    

    //edit users or update users data
    public function UserEdit($id) {
        $editData = new_user::find($id) ;
        $data = Department::all() ;
        $data2 = location::all() ;

        return view('backend.user.edit_user' , compact(['editData' , 'data' , 'data2'])) ;
    }

    public function UserUpdate(Request $request , $id) {
        $data = new_user::find($id) ;
        $data->user_department_location = $request->user_department_location ;
        $data->user_department = $request->user_department ;
        $data->name = $request->name ;

        $data->save() ;
        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;
    }

    //DELETE USERS 
    public function UserDelete($id) {
        $user = new_user::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;

    }

    //UserManageRequsts here
    public function UserManageRequsts() {
        $userDataReq = new_user::all()->where('usertype',null);
        return view('backend.user.managerequest' , ['allData'=>$userDataReq]) ;
    }

    public function UserInactiveUsers() {
        $userDataReq = new_user::all()->where('status','inactive');
        return view('backend.user.inactiveusers' , ['allData'=>$userDataReq]) ;

    }

    //view of approval page here   approval_page[page]
    public function UserApprovalRequestPageView($id) {
        $data = new_user::find($id) ;
        return view('backend.user.approval_page' , compact(['data'])) ;
    }

    //user approval update post here
    public function UserApprovalRequestUpdate(Request $request, $id) {
        $data = new_user::find($id) ;
        $data->usertype = $request->usertype ;
        $data->save() ;
        $notification = array(
            'message' => 'Request Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;

    }

    

}
