<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    //
    private $db_gallery;

    public function __construct()
    {
        $this->db_gallery = "photos";
    }

    // Photo Gallery Function
    public function Photos_Gallery()
    {
        $photo = DB::table($this->db_gallery)->orderBy('id', 'DESC')->get();
        return view('Backend.gallery.photo.photos', compact('photo'));
    }

    // Store Photos Gallery Function
    public function Store_Photos(Request $request)
    {
        $validate = $request->validate([

            "photo" => "required",
        ]);

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();



        $image = $request->photo;
        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/photo_gallery/' . $image_one);
            $data['photo'] = 'images/photo_gallery/' . $image_one;   // public/files/product/plus-point.jpg
        }

        DB::table($this->db_gallery)->insert($data);

        $notification = array('messege' => 'Add New Photo Successfully!', 'alert-type' => 'success');
        return redirect()->route('photos.gallery')->with($notification);
    }

    // Photo Gallery Edit Function 
    public function Photo_Gallery_Edit($id)
    {
        $edit = DB::table($this->db_gallery)->where('id', $id)->first();

        return view('Backend.gallery.photo.update', compact('edit'));
    }

    // Update Gallery Function
    public function Photo_Update(Request $request, $id)
    {

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();

        $image = $request->photo;
        $oldimage = $request->oldimage;
        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/photo_gallery/' . $image_one);
            $data['photo'] = 'images/photo_gallery/' . $image_one;   // public/files/product/plus-point.jpg

            DB::table($this->db_gallery)->where('id', $id)->update($data);
            unlink($oldimage);

            $notification = array('messege' => 'Gallery Update Successfully!', 'alert-type' => 'success');
            return redirect()->route('photos.gallery')->with($notification);
        }
        // jodi image na thake ta hole
        $data['photo'] = $oldimage;
        DB::table($this->db_gallery)->where('id', $id)->update($data);

        $notification = array('messege' => 'Gallery Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('photos.gallery')->with($notification);
    }

    // Delete Photos Gallerys Function
    public function Gallery_Delete(Request $request)
    {
        $id = $request->id;

        $Photo_Gallery = DB::table($this->db_gallery)->where('id', $id)->first();
        // dd($post);
        if ($Photo_Gallery !== 'photo') {
            $img = $Photo_Gallery->photo;
            unlink($img);
            DB::table($this->db_gallery)->where('id', $id)->delete();

            $notification = array('messege' => 'Photo Gallery Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('photos.gallery')->with($notification);
        } else {
            DB::table($this->db_gallery)->where('id', $id)->delete();

            $notification = array('messege' => 'Photo Gallery Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('photos.gallery')->with($notification);
        }
    }
}
