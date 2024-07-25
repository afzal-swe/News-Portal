<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeoController extends Controller
{
    //
    private $db_seo;

    public function __construct()
    {
        $this->db_seo = "seos";
    }

    // Seo Create or Update From Section 
    public function Seo_Create()
    {

        $seo = DB::table($this->db_seo)->first();

        if ($seo == Null) {

            return view('Backend.setting.seo.create');
        } else {

            return view('Backend.setting.seo.update', compact('seo'));
        }
    }

    // Seo Store Function
    public function Seo_Store(Request $request)
    {

        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_seo)->insert($data);

        $notification = array('messege' => 'Seo Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('seo.create')->with($notification);
    }

    // Update Seo Section
    public function Seo_Update(Request $request, $id)
    {


        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_seo)->where('id', $id)->update($data);

        $notification = array('messege' => 'Seo Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('seo.create')->with($notification);
    }
}
