<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User ;
use Illuminate\Support\Facades\Hash ;

class userProfileController extends Controller
{
    public function userprofileview() {
        $id = Auth::user()->id ;
        $user = User::find($id) ;
        return view('users_dashboard.userprofile.view_profile' , compact('user')) ;
    }

    //edit user profile here
    public function userprofileEdit() {
        $id = Auth::user()->id ;
        $editData = User::find($id) ;
        return view('users_dashboard.userprofile.edit_profile' , compact('editData')) ;
    }

    //updating the profile here
    public function userprofileStore(Request $request) {
        $data = User::find(Auth::user()->id) ;
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
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('userprofile.view')->with($notification) ;
    }

    //change password view here
    public function userPasswordView() {
        return view('users_dashboard.userprofile.edit_userpassword') ;

    }

    //updating the password here
    public function userPasswordUpdate(Request $request) {
                //validation
                $validatedData = $request->validate([
                    'oldpassword'=> 'required' ,
                    'password' => 'required|confirmed',
                ]) ;
               
                $hashedPassword = Auth::user()->password ;
                if(Hash::check($request->oldpassword,$hashedPassword)) {
                    $user = User::find(Auth::id()) ;
                    $user->password = Hash::make($request->password) ;
                    $user->save() ;
                    Auth::logout(); //after changing the password the authenticated use must be logout automatically
                    $notification = array(
                        'message' => 'Your Password Updated Successfully',
                        'alert-type' => 'success'
                    ) ;
            
                    return redirect()->route('login')->with($notification) ;
                }
                else{
                    return redirect()->back() ; //return to the back page
                }
                
        
    }


}
