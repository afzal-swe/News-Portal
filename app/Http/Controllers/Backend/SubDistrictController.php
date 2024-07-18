<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SubDistrictController extends Controller
{
    //
    private $db_sub_district;
    private $db_district;

    public function __construct()
    {
        $this->db_sub_district = "sub_districts";
        $this->db_district = "districts";
    }

    // View All Sub-District
    public function District_View()
    {

        $sub_district = DB::table($this->db_sub_district)
            ->join('districts', 'sub_districts.district_id', 'districts.id')
            ->select('districts.district_bn', 'sub_districts.*')
            ->orderBy('id', 'DESC')->get();
        $district = DB::table($this->db_district)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.sub_district.view_sub_district', compact('sub_district', 'district'));
    }


    // Sub District Create Function
    public function Add_Sub_District(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([

            "subdistrict_bn" => "required",
            "subdistrict_en" => "required",

        ]);

        $data = array();
        $data['district_id'] = $request->district_id;
        $data['subdistrict_bn'] = $request->subdistrict_bn;
        $data['subdistrict_en'] = $request->subdistrict_en;
        $data['status'] = $request->status;
        $data['slug'] = Str::of($request->subdistrict_en)->slug('-');
        $data['created_at'] = Carbon::now();

        DB::table($this->db_sub_district)->insert($data);

        $notification = array('messege' => 'Sub-District Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('Sub_district_View')->with($notification);
    }

    // Sub District edit function
    public function Sub_District_Edit(Request $request)
    {
        $slug = $request->slug;
        $edit = DB::table($this->db_sub_district)->where('slug', $slug)->first();
        $district = DB::table($this->db_district)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.sub_district.update_sub_district', compact('edit', 'district'));
    }

    // Sub District Update Function
    public function Sub_District(Request $request)
    {
        $slug = $request->slug;

        $data = array();
        $data['district_id'] = $request->district_id;
        $data['subdistrict_bn'] = $request->subdistrict_bn;
        $data['subdistrict_en'] = $request->subdistrict_en;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_sub_district)->where('slug', $slug)->update($data);

        $notification = array('messege' => 'Sub-District Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('Sub_district_View')->with($notification);
    }

    // Delete Sub district Function
    public function Sub_District_Delete(Request $request)
    {
        $slug = $request->slug;
        DB::table($this->db_sub_district)->where('slug', $slug)->delete();

        $notification = array('messege' => 'Sub-District Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('Sub_district_View')->with($notification);
    }
}
