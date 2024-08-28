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



    /**
     * Constructor method.
     *
     * This constructor method initializes the class by setting the `$this->db_district` property 
     * to the name of the database table `"districts"`. This property will be used to reference the 
     * districts table throughout the class.
     */
    public function __construct()
    {
        $this->db_district = "districts";
    }



    /**
     * Display and view all districts.
     *
     * This method retrieves all district records from the database, ordered by their ID in descending order,
     * and passes the retrieved districts data to the 'Backend.district.view_district' view for display.
     *
     * @return \Illuminate\View\View
     */
    public function District_View()
    {
        $district = DB::table($this->db_district)->orderBy('id', 'DESC')->get();
        return view('Backend.district.view_district', compact('district'));
    }




    /**
     * Store a newly created district.
     *
     * This method handles the addition of a new district. It first validates the incoming request to ensure that both 
     * 'district_bn' and 'district_en' fields are present. Custom validation messages are provided for missing fields.
     * Upon successful validation, the method prepares the data for insertion, including generating a slug from the 
     * 'district_bn' field and setting the creation timestamp. The district data is then inserted into the database. 
     * After successful addition, a success notification is prepared, and the user is redirected to the district view page 
     * with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Add_District(Request $request)
    {
        $validate = $request->validate([
            "district_bn" => "required",
            "district_en" => "required",
        ], [
            'district_bn.required' => 'District bn is required',
            'district_en.required' => 'District en is required',
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




    /**
     * Show the form for editing a district.
     *
     * This method retrieves the district record with the specified slug from the database and passes the 
     * district data to the 'Backend.district.edit_district' view for editing.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function District_Edit(Request $request)
    {

        $edit = DB::table($this->db_district)->where('slug', $request->slug)->first();
        return view('Backend.district.edit_district', compact('edit'));
    }





    /**
     * Update an existing district.
     *
     * This method handles the updating of a district record. It first prepares the data for updating, including setting 
     * the updated timestamp. The district record with the specified slug is then updated in the database. After successful
     * update, a success notification is prepared, and the user is redirected to the district view page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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






    /**
     * Delete a district.
     *
     * This method deletes a district record from the database based on the specified slug. After successful deletion,
     * a success notification is prepared, and the user is redirected to the district view page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function District_Delete(Request $request)
    {
        $delete = $request->slug;

        DB::table($this->db_district)->where('slug', $delete)->delete();
        $notification = array('messege' => 'District Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('District_View')->with($notification);
    }
}
