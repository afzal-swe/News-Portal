<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class DistrictController extends Controller
{
    //
    private $db_district;

    public function __construct()
    {
        $this->db_district = "districts";
    }

    // View All District Function
    public function District_View()
    {
        $district = DB::table($this->db_district)->orderBy('id', 'DESC')->get();
        return view('Backend.district.view_district', compact('district'));
    }

    // Create District Function

    public function Add_District(Request $request)
    {
        $validate = $request->validate([
            "district_bn" => "required",
            "district_en" => "required",
        ]);

        $data = array();
        $data['district_bn'] = $request->district_bn;
        $data['district_en'] = $request->district_en;
        $data['slug'] = Str::of($request->district_bn)->slug('-');
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_district)->insert($data);

        $notification = array('messege' => 'District Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('District_View')->with($notification);
    }

    // District Delete Function
    public function District_Delete(Request $request)
    {
        $delete = $request->slug;

        DB::table($this->db_district)->where('slug', $delete)->delete();
        $notification = array('messege' => 'District Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('District_View')->with($notification);
    }

    // District Update Function
    public function District_Update(Request $request)
    {
        $slug = $request->slug;
        $data = array();
        $data['district_bn'] = $request->district_bn;
        $data['district_en'] = $request->district_en;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_district)->where('slug', $slug)->update($data);

        $notification = array('messege' => 'District Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('District_View')->with($notification);
    }

    // Edit District function
    public function District_Edit(Request $request)
    {

        $edit = DB::table($this->db_district)->where('slug', $request->slug)->first();
        return view('Backend.district.edit_district', compact('edit'));
    }
}
