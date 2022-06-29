<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice ;

class ManageNoticeController extends Controller
{
    //add
    public function AddMangeNotice() {
        return view('backend.notice.add') ;
    }

    //Store
    public function StoreNotices(Request $request) {
        $validatedData = $request->validate([
            'notice_date' => 'required',
        ]) ;

        $dataDB = new Notice() ;
        $dataDB->notice_date = $request->notice_date ;
        //images and docs
        $notice_attachments = array() ;
        if($multi_image_filess = $request->file('notice_attachments')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/noticess/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/noticess/'),$multi_image_full_name)  ;
                $notice_attachments[] = $multi_image_url ;
                $dataDB->notice_attachments = implode('|' , $notice_attachments) ;
            }
        }//multiple images
        $dataDB->notice_content = $request->notice_content ;
        $dataDB->notice_status = $request->notice_status ;
        $dataDB->save() ;
        $notification = array(
            'message' => "New Notice Added successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('manage-notice.add')->with($notification) ;
    }

    //view
    public function ViewAllNotice() {
        $data = Notice::latest()->get() ;
        return view('backend.notice.view' , compact(['data'])) ;
    }
}
