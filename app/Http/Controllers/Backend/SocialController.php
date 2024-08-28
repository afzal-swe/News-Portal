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




    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_social` property with the name of the database table used for storing social media entries.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_social = "socials";
    }




    /**
     * Display the social media create or update form.
     *
     * This method checks if a social media entry exists in the database. If no social media entry is found, it returns a view for creating a new social media entry. If a social media entry is found, it returns a view for updating the existing entry, passing the social media data to the view.
     *
     * @return \Illuminate\View\View
     */
    public function Social_Create()
    {

        $social = DB::table($this->db_social)->first();

        if ($social == Null) {

            return view('Backend.setting.social.create');
        } else {

            return view('Backend.setting.social.update', compact('social'));
        }
    }




    /**
     * Store a new social media entry in the database.
     *
     * This method retrieves social media data from the request, constructs an array of this data, and inserts it into the database. It then redirects the user to the social media options page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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



    /**
     * Update an existing social media entry in the database.
     *
     * This method retrieves updated social media data from the request, constructs an array of this data, and updates the corresponding entry in the database based on the provided ID. It then redirects the user to the social media options page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
