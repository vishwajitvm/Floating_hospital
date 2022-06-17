<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //user VIEW
    public function UserView() {
        // $allData = User::all() ;
        $data['allData'] = User::all() ;
        $data['allData'] = User::latest()->get() ;
        
       return view('backend.user.view_user' , $data) ;
    }

    //ADD users 
    public function UserAdd() {
        return view('backend.user.add_user') ;
    }
    //storing updated data
    public function UserStore(Request $request) {
        $validatedData = $request->validate([
            'email'=> 'required|unique:users' ,
            'name' => 'required',
        ]) ;

        $data = new User() ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->password = bcrypt($request->password);
        $data->mobile = $request->mobile ;
        $data->address = $request->address ;
        $data->gender = $request->gender ;
        $data->birth_date = $request->birth_date ;
        $data->gmail_address = $request->gmail_address ;
        $data->facebook_profile = $request->facebook_profile ;
        $data->instagram_profile = $request->instagram_profile ;
        $data->linkdine_profile = $request->linkdine_profile ;
        $data->hear_about_party = $request->hear_about_party ;
        $data->expectation_from_aragma = $request->expectation_from_aragma ;
        $data->user_tallent = $request->user_tallent ;
            // $data->image = $request->image ;
        if($request->file('image')) {
            $file = $request->file('image') ;
            @unlink(public_path('upload/user_images/'.$data->image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/user_images'),$filename) ;
            $data['image'] = $filename ;
        }

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
        $data = User::find($id) ;
        return view('backend.user.view_userdetails' , compact('data')) ;

    }
    

    //edit users or update users data
    public function UserEdit($id) {
        $editData = User::find($id) ;
        return view('backend.user.edit_user' , compact('editData')) ;
    }

    public function UserUpdate(Request $request , $id) {
        $data = User::find($id) ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->mobile = $request->mobile ;
        $data->address = $request->address ;
        $data->gender = $request->gender ;
        $data->birth_date = $request->birth_date ;
        $data->gmail_address = $request->gmail_address ;
        $data->facebook_profile = $request->facebook_profile ;
        $data->instagram_profile = $request->instagram_profile ;
        $data->linkdine_profile = $request->linkdine_profile ;
        $data->hear_about_party = $request->hear_about_party ;
        $data->expectation_from_aragma = $request->expectation_from_aragma ;
        $data->user_tallent = $request->user_tallent ;
        $data->status = $request->status ;

        $data->save() ;
        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;
    }

    //DELETE USERS 
    public function UserDelete($id) {
        $user = User::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;

    }

    //UserManageRequsts here
    public function UserManageRequsts() {
        $userDataReq = User::all()->where('usertype',null);
        return view('backend.user.managerequest' , ['allData'=>$userDataReq]) ;
    }

    public function UserInactiveUsers() {
        $userDataReq = User::all()->where('status','inactive');
        return view('backend.user.inactiveusers' , ['allData'=>$userDataReq]) ;

    }

    //view of approval page here   approval_page[page]
    public function UserApprovalRequestPageView($id) {
        $data = User::find($id) ;
        return view('backend.user.approval_page' , compact(['data'])) ;
    }

    //user approval update post here
    public function UserApprovalRequestUpdate(Request $request, $id) {
        $data = User::find($id) ;
        $data->usertype = $request->usertype ;
        $data->save() ;
        $notification = array(
            'message' => 'Request Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;

    }

}
