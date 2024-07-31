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

    public function __construct()
    {
        $this->db_website_info = "settings";
    }


    public function Website_Info()
    {
        $website_update = DB::table($this->db_website_info)->first();

        if ($website_update == Null) {
            return view('Backend.website_info.create');
        } else {
            return view('Backend.website_info.update', compact('website_update'));
        }
    }

    // Web site Store
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

    // Web Site Info Update
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
        $oldimage = $request->oldimage;
        //single thumbnail
        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 130)->save('images/setting/' . $image_one);
            $data['logo'] = 'images/setting/' . $image_one;   // public/files/product/plus-point.jpg

            DB::table($this->db_website_info)->where('id', $id)->update($data);
            unlink($oldimage);

            $notification = array('messege' => 'Update Successfully!', 'alert-type' => 'success');
            return redirect()->route('website.info')->with($notification);
        }
        // jodi image na thake ta hole
        $data['logo'] = $oldimage;
        DB::table($this->db_website_info)->where('id', $id)->update($data);

        $notification = array('messege' => 'Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('website.info')->with($notification);
    }
}
