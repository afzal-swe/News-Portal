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


    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_seo` property with the name of the database table used for storing SEO entries.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_seo = "seos";
    }



    /**
     * Display the SEO create or update form.
     *
     * This method checks if an SEO entry exists in the database. If no SEO entry is found, it returns a view for creating a new SEO entry. If an SEO entry is found, it returns a view for updating the existing SEO entry, passing the SEO data to the view.
     *
     * @return \Illuminate\View\View
     */
    public function Seo_Create()
    {

        $seo = DB::table($this->db_seo)->first();

        if ($seo == Null) {

            return view('Backend.setting.seo.create');
        } else {

            return view('Backend.setting.seo.update', compact('seo'));
        }
    }





    /**
     * Store a new SEO entry in the database.
     *
     * This method retrieves SEO-related data from the request, constructs an array of this data, and inserts it into the database. It then redirects the user to the SEO creation page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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






    /**
     * Update an existing SEO entry in the database.
     *
     * This method retrieves updated SEO-related data from the request, constructs an array of this data, and updates the corresponding SEO entry in the database based on the provided ID. It then redirects the user to the SEO creation page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
