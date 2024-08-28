<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class AdsController extends Controller
{
    //

    private $db_ads;

    /**
     * Constructor method.
     *
     * This constructor method initializes the class by setting the `$this->db_ads` property to the name of the
     * database table `"ads"`. This property will be used to reference the ads table throughout the class.
     */
    public function __construct()
    {
        $this->db_ads = "ads";
    } // End Method




    /**
     * Display and manage advertisements.
     *
     * This method retrieves all ad records from the database, ordered by their ID in descending order,
     * and passes the retrieved ads data to the 'Backend.ads.manage' view for display and management.
     *
     * @return \Illuminate\View\View
     */
    public function Manage_Ads()
    {
        $ads_horizontal = DB::table($this->db_ads)->orderBy('id', 'DESC')->get();

        return view('Backend.ads.manage', compact('ads_horizontal'));
    }

    /**
     * Store a newly created ad.
     *
     * This method handles the creation of a new advertisement. It first validates the incoming request to ensure
     * that the 'link' field is present. If validation passes, the ad data is prepared, including setting the creation
     * timestamp and handling the image upload based on the ad type. For type 2 ads, the image is resized to 970x90 pixels,
     * and for other types, it is resized to 500x500 pixels. The processed image is saved, and the ad data is inserted
     * into the database. After successful insertion, a success notification is prepared, and the user is redirected
     * to the manage ads page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Store_Ads(Request $request)
    {

        $validate = $request->validate([

            "link" => "required",
            "image" => "required",

        ], [
            'link.required' => 'This link is required',
            'image.required' => 'This image is required',
        ]);

        $data = array();
        $data['link'] = $request->link;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();

        $image = $request->image;

        if ($request->type == 2) {

            if ($image) {

                $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(970, 90)->save('images/ads/' . $image_one);
                $data['image'] = 'images/ads/' . $image_one;   // public/files/product/plus-point.jpg
            }
        } else {
            if ($image) {

                $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 500)->save('images/ads/' . $image_one);
                $data['image'] = 'images/ads/' . $image_one;   // public/files/product/plus-point.jpg
            }
        }
        DB::table($this->db_ads)->insert($data);

        $notification = array('messege' => 'Ads Create Successfully!', 'alert-type' => 'success');
        return redirect()->route('manage.ads')->with($notification);
    }




    /**
     * Show the form for editing an advertisement.
     *
     * This method retrieves the ad record with the specified ID from the database and passes the ad data
     * to the 'Backend.ads.update' view for editing.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function Ads_Edit(Request $request)
    {
        $id = $request->id;
        $edit_ads = DB::table($this->db_ads)->where('id', $id)->first();
        return view('Backend.ads.update', compact('edit_ads'));
    }




    /**
     * Update an existing advertisement.
     *
     * This method updates an advertisement record in the database based on the provided ID. It prepares the data for updating, 
     * including setting the updated_at timestamp. If a new image is provided, it processes the image according to the ad type, 
     * deletes the old image, and saves the new one. The ad data is then updated in the database. After successful update, 
     * a success notification is prepared, and the user is redirected to the manage ads page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Ads_Update(Request $request, $id)
    {


        $data = array();
        $data['link'] = $request->link;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();

        $image = $request->image;


        if ($request->type == 2) {

            if ($image) {

                $update_data = DB::table($this->db_ads)->where('id', $id)->first();
                $old_image = $update_data->image;
                unlink($old_image);

                $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(970, 90)->save('images/ads/' . $image_one);
                $data['image'] = 'images/ads/' . $image_one;   // public/files/product/plus-point.jpg
            }
        } elseif ($request->type == 1) {
            if ($image) {

                $update_data = DB::table($this->db_ads)->where('id', $id)->first();
                $old_image = $update_data->image;
                unlink($old_image);

                $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 500)->save('images/ads/' . $image_one);
                $data['image'] = 'images/ads/' . $image_one;   // public/files/product/plus-point.jpg
            }
        }

        DB::table($this->db_ads)->where('id', $id)->update($data);

        $notification = array('messege' => 'Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('manage.ads')->with($notification);
    }




    /**
     * Delete an advertisement.
     *
     * This method deletes an advertisement record from the database based on the provided ID. 
     * If the ad has an associated image, it deletes the image file from the server before removing the record from the database.
     * After successful deletion, a success notification is prepared, and the user is redirected to the manage ads page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Ads_Delete(Request $request)
    {

        $id = $request->id;

        $ads = DB::table($this->db_ads)->where('id', $id)->first();
        // dd($post);
        if ($ads) {
            $img = $ads->image;
            unlink($img);
            DB::table($this->db_ads)->where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('manage.ads')->with($notification);
        }
    }
}
