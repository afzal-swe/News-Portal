<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LivetvController extends Controller
{
    //
    private $db_livetv;

    public function __construct()
    {
        $this->db_livetv = "livetv";
    }

    // Live TV Function 
    public function Live_TV()
    {


        $livetv = DB::table($this->db_livetv)->first();

        if ($livetv == Null) {

            return view('Backend.setting.livetv.create');
        } else {

            return view('Backend.setting.livetv.update', compact('livetv'));
        }
    }

    // Live TV Store Function
    public function Livetv_Store(Request $request)
    {
        $request->validate([
            'embed_code' => ['required'],
        ]);

        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_livetv)->insert($data);

        $notification = array('messege' => 'Live TV Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('livetv.option')->with($notification);
    }

    // Live TV Update Function

    public function Livetv_Update(Request $request, $id)
    {


        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_livetv)->where('id', $id)->update($data);

        $notification = array('messege' => 'Live TV Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('livetv.option')->with($notification);
    }
}
