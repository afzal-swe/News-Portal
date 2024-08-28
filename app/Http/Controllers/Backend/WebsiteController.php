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


    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_websites` property with the name of the database table used for storing website data.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_websites = "websites";
    }




    /**
     * Display a view of all websites.
     *
     * This method retrieves all records from the `websites` table in the database and returns a view with the retrieved websites data.
     *
     * @return \Illuminate\View\View
     */
    public function Website()
    {
        $websites = DB::table($this->db_websites)->get();

        return view('Backend.setting.website_setting.view_website', compact('websites'));
    }



    /**
     * Display the form to create a new website entry.
     *
     * This method returns a view that contains the form for creating a new website entry.
     *
     * @return \Illuminate\View\View
     */
    public function Website_create()
    {
        return view('Backend.setting.website_setting.create');
    }



    /**
     * Store a new website entry in the database.
     *
     * This method validates the request data, constructs an array with the validated data, and inserts it into the `websites` table in the database. It then redirects the user to the website view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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



    /**
     * Display the form to edit a specific website entry.
     *
     * This method retrieves the website data for the given ID from the database and returns a view with the website data for editing.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function Website_Edit($id)
    {

        $edit = DB::table($this->db_websites)->where('id', $id)->first();
        return view('Backend.setting.website_setting.update', compact('edit'));
    }





    /**
     * Update an existing website entry in the database.
     *
     * This method retrieves updated website data from the request, constructs an array with this data, and updates the corresponding website record in the database based on the provided ID. It then redirects the user to the website view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

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



    /**
     * Delete a specific website entry from the database.
     *
     * This method deletes the website record identified by the provided ID from the database. It then redirects the user to the website view page with a success notification.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Website_Delete($id)
    {

        DB::table($this->db_websites)->where('id', $id)->delete();
        $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('website')->with($notification);
    }
}
