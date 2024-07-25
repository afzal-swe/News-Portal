<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NoticesController extends Controller
{
    //
    private $db_notices;

    public function __construct()
    {
        $this->db_notices = "notices";
    }

    // Notice View Function
    public function Notice()
    {

        $notice = DB::table($this->db_notices)->first();

        if ($notice == Null) {

            return view('Backend.setting.notices.create');
        } else {

            return view('Backend.setting.notices.update', compact('notice'));
        }
    }

    // Notice Store Function
    public function Notice_Store(Request $request)
    {

        $validate = $request->validate([

            'notice_bn' => 'required',
            'notice_en' => 'required'

        ]);

        $data = array();
        $data['notice_bn'] = $request->notice_bn;
        $data['notice_en'] = $request->notice_en;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_notices)->insert($data);

        $notification = array('messege' => 'Notice Create Successfully!', 'alert-type' => 'success');
        return redirect()->route('notice')->with($notification);
    }

    // Notice Update Function
    public function Notice_Update(Request $request, $id)
    {

        $data = array();
        $data['notice_bn'] = $request->notice_bn;
        $data['notice_en'] = $request->notice_en;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_notices)->where('id', $id)->update($data);

        $notification = array('messege' => 'Notice Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('notice')->with($notification);
    }
}
