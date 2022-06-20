<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department ;
use App\Models\new_user ;

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
        return view('backend.user.add_user' , compact(['data'])) ;
    }

    //storing updated data
    public function UserStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
        ]) ;

        $data = new new_user() ;
        // $data->usertype = $request->usertype ;
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
        return view('backend.user.edit_user' , compact(['editData' , 'data'])) ;
    }

    public function UserUpdate(Request $request , $id) {
        $data = new_user::find($id) ;
        // $data->usertype = $request->usertype ;
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
