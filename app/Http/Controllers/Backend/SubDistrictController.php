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



    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_sub_district` and `$db_district` properties with the names of the database tables used for storing sub-districts and districts, respectively.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_sub_district = "sub_districts";
        $this->db_district = "districts";
    }



    /**
     * Display a view of sub-districts and districts.
     *
     * This method retrieves a list of sub-districts joined with their corresponding districts from the database. It also retrieves a list of active districts. The method then returns a view with the retrieved sub-districts and active districts data.
     *
     * @return \Illuminate\View\View
     */
    public function District_View()
    {

        $sub_district = DB::table($this->db_sub_district)
            ->join('districts', 'sub_districts.district_id', 'districts.id')
            ->select('districts.district_bn', 'sub_districts.*')
            ->orderBy('id', 'DESC')->get();
        $district = DB::table($this->db_district)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.sub_district.view_sub_district', compact('sub_district', 'district'));
    }




    /**
     * Add a new sub-district to the database.
     *
     * This method validates the request data, constructs an array with the validated data, and inserts it into the sub-districts table in the database. It then redirects the user to the sub-district view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

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




    /**
     * Display the edit form for a specific sub-district.
     *
     * This method retrieves the sub-district data based on the provided slug from the database. It also retrieves a list of active districts. The method then returns a view with the sub-district data and district list for editing.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function Sub_District_Edit(Request $request)
    {
        $slug = $request->slug;
        $edit = DB::table($this->db_sub_district)->where('slug', $slug)->first();
        $district = DB::table($this->db_district)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.sub_district.update_sub_district', compact('edit', 'district'));
    }




    /**
     * Update an existing sub-district in the database.
     *
     * This method retrieves updated sub-district data from the request, constructs an array of this data, and updates the corresponding sub-district record in the database based on the provided slug. It then redirects the user to the sub-district view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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




    /**
     * Delete a specific sub-district from the database.
     *
     * This method deletes the sub-district record identified by the provided slug from the database. It then redirects the user to the sub-district view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Sub_District_Delete(Request $request)
    {
        $slug = $request->slug;
        DB::table($this->db_sub_district)->where('slug', $slug)->delete();

        $notification = array('messege' => 'Sub-District Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('Sub_district_View')->with($notification);
    }
}
