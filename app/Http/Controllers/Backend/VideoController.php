<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VideoController extends Controller
{
    //
    private $db_video;

    public function __construct()
    {
        $this->db_video = "videos";
    }

    // View all Gallery Video Function
    public function Video_Gallery()
    {

        $video = DB::table($this->db_video)->orderBy('id', 'DESC')->get();
        return view('Backend.gallery.video.video', compact('video'));
    }

    // Store Video Function
    public function Store_Video(Request $request)
    {

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();


        DB::table($this->db_video)->insert($data);

        $notification = array('messege' => 'Add New Video Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }

    // Video Edit Function
    public function Video_Edit($id)
    {

        $edit_video = DB::table($this->db_video)->where('id', $id)->first();
        return view('Backend.gallery.video.update', compact('edit_video'));
    }

    // Video Update Function
    public function Video_Update(Request $request, $id)
    {

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();


        DB::table($this->db_video)->where('id', $id)->update($data);

        $notification = array('messege' => 'Video Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }


    // Video Delete Function
    public function Video_Delete($id)
    {

        DB::table($this->db_video)->where('id', $id)->delete();

        $notification = array('messege' => 'Video Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }
}
