<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\new_user;

class ManageEmoloyees extends Controller
{
    //view all employee
    public function ViewallEmployees() {
        $data = new_user::all() ;
        return $data ;
    }
}
