<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    //

    private $db_website_info;



    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_website_info` property with the name of the database table used for storing website settings.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_website_info = "settings";
    }



    /**
     * Display the form to create or update website information.
     *
     * This method retrieves the first record from the `settings` table. If no record is found, it returns a view for creating new website information. If a record is found, it returns a view for updating the existing website information, passing the retrieved data to the view.
     *
     * @return \Illuminate\View\View
     */
    public function Website_Info()
    {
        $website_update = DB::table($this->db_website_info)->first();

        if ($website_update == Null) {
            return view('Backend.website_info.create');
        } else {
            return view('Backend.website_info.update', compact('website_update'));
        }
    }




    /**
     * Store new website information in the database.
     *
     * This method validates the incoming request data, prepares an array with the website information, and inserts it into the `settings` table. It handles image uploads by resizing and saving the logo image, then redirects the user to the website information page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Website_info_Store(Request $request)
    {


        $validate = $request->validate([
            "logo" => "required",
            "wname_bn" => "required",
            "wname_en" => "required",

        ]);

        $data = array();
        $data['wname_bn'] = $request->wname_bn;
        $data['wname_en'] = $request->wname_en;
        $data['address_bn'] = $request->address_bn;
        $data['address_en'] = $request->address_en;
        $data['phone_bn'] = $request->phone_bn;
        $data['phone_en'] = $request->phone_en;
        $data['email'] = $request->email;
        $data['created_at'] = Carbon::now();

        $image = $request->logo;

        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 130)->save('images/setting/' . $image_one);
            $data['logo'] = 'images/setting/' . $image_one;   // public/files/product/plus-point.jpg
        }

        DB::table($this->db_website_info)->insert($data);

        $notification = array('messege' => 'Create Successfully!', 'alert-type' => 'success');
        return redirect()->route('website.info')->with($notification);
    }





    /**
     * Update existing website information in the database.
     *
     * This method validates the incoming request data, prepares an array with the updated website information, and updates the record in the `settings` table. If a new logo image is provided, it handles image uploads by resizing and saving the new logo, while deleting the old image. Redirects the user to the website information page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Website_Info_Update(Request $request, $id)
    {
        // dd($request->all());

        $data = array();
        $data['wname_bn'] = $request->wname_bn;
        $data['wname_en'] = $request->wname_en;
        $data['address_bn'] = $request->address_bn;
        $data['address_en'] = $request->address_en;
        $data['phone_bn'] = $request->phone_bn;
        $data['phone_en'] = $request->phone_en;
        $data['email'] = $request->email;
        $data['created_at'] = Carbon::now();

        $image = $request->logo;

        //single thumbnail
        if ($image) {

            $info_data = DB::table($this->db_website_info)->where('id', $id)->first();
            $old_image = $info_data->logo;
            unlink($old_image);


            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 130)->save('images/setting/' . $image_one);
            $data['logo'] = 'images/setting/' . $image_one;   // public/files/product/plus-point.jpg
        }

        DB::table($this->db_website_info)->where('id', $id)->update($data);

        $notification = array('messege' => 'Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('website.info')->with($notification);
    }
}
