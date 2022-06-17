<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function loginRedirects() {
        $role = Auth::user()->usertype ;
        if($role == 'admin') {
            return redirect('/dashboard') ;
        }
        else{
            return redirect('userdashboard') ;
        }
    }

    //Logout
    // public function Logout() {
    //     Auth::logout();
    //     return Redirect()->route('login') ;
    // }

    public function Logout(Request $request) {
        header("cache-Control: no-store, no-cache, must-revalidate");
    header("cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    $request->session()->flush();
    $request->session()->regenerate();
    $request->session()->flush('succ_message', 'Logged out Successfully');
        return Redirect()->route('login') ;
    }

    //
    
}
