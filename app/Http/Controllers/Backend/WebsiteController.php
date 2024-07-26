<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WebsiteController extends Controller
{
    //
    private $db_websites;

    public function __construct()
    {
        $this->db_websites = "websites";
    }

    // view All Website History
    public function Website()
    {
        $websites = DB::table($this->db_websites)->get();

        return view('Backend.setting.website_setting.view_website', compact('websites'));
    }

    // Create Website Function
    public function Website_create()
    {
        return view('Backend.setting.website_setting.create');
    }

    // Store Website 
    public function Website_Store(Request $request)
    {

        $validate = $request->validate([
            "website_name_bn" => "required",
        ]);

        $data = array();
        $data['website_name_bn'] = $request->website_name_bn;
        $data['website_name_en'] = $request->website_name_en;
        $data['website_link'] = $request->website_link;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_websites)->insert($data);

        $notification = array('messege' => 'Add New Website Setting Successfully!', 'alert-type' => 'success');
        return redirect()->route('website')->with($notification);
    }

    // Edit Website Setting Function
    public function Website_Edit($id)
    {

        $edit = DB::table($this->db_websites)->where('id', $id)->first();
        return view('Backend.setting.website_setting.update', compact('edit'));
    }

    // Web Site Update Function
    public function Website_Update(Request $request, $id)
    {

        $data = array();
        $data['website_name_bn'] = $request->website_name_bn;
        $data['website_name_en'] = $request->website_name_en;
        $data['website_link'] = $request->website_link;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_websites)->where('id', $id)->update($data);

        $notification = array('messege' => 'Update Website Setting Successfully!', 'alert-type' => 'success');
        return redirect()->route('website')->with($notification);
    }

    // Delete Website Function
    public function Website_Delete($id)
    {

        DB::table($this->db_websites)->where('id', $id)->delete();
        $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('website')->with($notification);
    }
}
