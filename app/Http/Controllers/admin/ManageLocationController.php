<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\location ;

class ManageLocationController extends Controller
{
    //Add
    public function AddLocation() {
        return view('backend.Locations.add') ;
    }

    //Store
    public function StoreLocations(Request $request) {
        $validatedData = $request->validate([
            'location_name' => 'required',
        ]) ;

        $data = new location() ;
        $data->location_name = $request->location_name ;
        $data->location = $request->location ;
        $data->location_status = $request->location_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->location_name Location Added successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('manage-location.add')->with($notification) ;
    }

    //View 
    public function ViewLocations() {
        $data = location::latest()->get() ;
        return view('backend.Locations.view' , compact(['data'])) ;
    }

}
