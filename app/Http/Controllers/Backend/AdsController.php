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

    public function __construct()
    {
        $this->db_ads = "ads";
    }



    public function Manage_Ads()
    {
        $ads_horizontal = DB::table($this->db_ads)->orderBy('id', 'DESC')->get();

        return view('Backend.ads.manage', compact('ads_horizontal'));
    }

    // store Ads
    public function Store_Ads(Request $request)
    {

        $validate = $request->validate([

            "link" => "required",

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

    // Ads Edit Section 
    public function Ads_Edit(Request $request)
    {
        $id = $request->id;
        $edit_ads = DB::table($this->db_ads)->where('id', $id)->first();
        return view('Backend.ads.update', compact('edit_ads'));
    }

    // Ads Update Section
    public function Ads_Update(Request $request, $id)
    {


        $data = array();
        $data['link'] = $request->link;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();



        $image = $request->image;
        $oldimage = $request->oldimage;

        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(970, 90)->save('images/ads/' . $image_one);
            $data['image'] = 'images/ads/' . $image_one;   // public/files/product/plus-point.jpg
            DB::table($this->db_ads)->where('id', $id)->update($data);
            unlink($oldimage);
        }


        $data['image'] = $oldimage;
        DB::table($this->db_ads)->where('id', $id)->update($data);

        $notification = array('messege' => 'Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('manage.ads')->with($notification);
    }

    // Ads Delete 
    public function Ads_Delete(Request $request)
    {

        $id = $request->id;

        $ads = DB::table($this->db_ads)->where('id', $id)->first();
        // dd($post);
        if ($ads !== 'image') {
            $img = $ads->image;
            unlink($img);
            DB::table($this->db_ads)->where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('manage.ads')->with($notification);
        } else {
            DB::table($this->db_ads)->where('id', $id)->delete();

            $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('manage.ads')->with($notification);
        }
    }
}
