<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SocialController extends Controller
{
    //

    private $db_social;

    public function __construct()
    {
        $this->db_social = "socials";
    }



    // View Create or Update From Section 
    public function Social_Create()
    {

        $social = DB::table($this->db_social)->first();

        if ($social == Null) {

            return view('Backend.setting.social.create');
        } else {

            return view('Backend.setting.social.update', compact('social'));
        }
    }

    // Social Store Function
    public function Social_Store(Request $request)
    {

        $data = array();
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['instagram'] = $request->instagram;
        $data['linkedin'] = $request->linkedin;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_social)->insert($data);
        $notification = array('messege' => 'Social Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('social.option')->with($notification);
    }

    // Social Updatde Function
    public function Social_Update(Request $request, $id)
    {


        $data = array();
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['instagram'] = $request->instagram;
        $data['linkedin'] = $request->linkedin;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_social)->where('id', $id)->update($data);
        $notification = array('messege' => 'Social Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('social.option')->with($notification);
    }
}
