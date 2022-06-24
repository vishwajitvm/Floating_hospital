<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\schedule ;

class ManageSchedulesCOntroller extends Controller
{
    //add
    public function AddSchedules() {
        return view('backend.schedules.add') ;
    }

    //store
    public function StoreSchedules(Request $request) {
        $data = new schedule() ;
        $data->schedule_date = $request->schedule_date ;
        $data->LIC_dhs_3medical_total = $request->LIC_dhs_3medical_total ;
        $data->lic_chc_1medical_total = $request->lic_chc_1medical_total ;
        $data->help_moris_medical = $request->help_moris_medical ;
        $data->help_moris_bh = $request->help_moris_bh ;
        $data->queenbridge_total = $request->queenbridge_total ;
        $data->astoria_total = $request->astoria_total ;
        $data->dental_dhs = $request->dental_dhs ;
        $data->denatl_chc = $request->denatl_chc ;
        $data->podiatry_total = $request->podiatry_total ;
        $data->id_clinic_total = $request->id_clinic_total ;
        $data->behavioral_chc_telehelth = $request->behavioral_chc_telehelth ;
        $data->behavioral_chc_inperson = $request->behavioral_chc_inperson ;
        $data->behavioral_dhs_telehelth = $request->behavioral_dhs_telehelth ;
        $data->behavioral_dhs_inperson = $request->behavioral_dhs_inperson ;
        $data->schedule_status = $request->schedule_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->schedule_date  schedules updated successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('manage-schedule.view')->with($notification) ;
    }

    //view all schedules
    public function ViewallSchedules() {
        $data = schedule::latest()->get() ;
        return view('backend.schedules.view' , compact(['data'])) ;
    }
}
