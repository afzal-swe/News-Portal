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



    /**
     * Constructor method.
     *
     * This constructor method initializes the class by setting the `$this->db_gallery` property 
     * to the name of the database table `"photos"`. This property will be used to reference the 
     * gallery table throughout the class.
     */
    public function __construct()
    {
        $this->db_gallery = "photos";
    }



    /**
     * Display the photo gallery.
     *
     * This method retrieves all photo records from the database, ordered by their ID in descending order,
     * and passes the retrieved photos data to the 'Backend.gallery.photo.photos' view for display.
     *
     * @return \Illuminate\View\View
     */
    public function Photos_Gallery()
    {
        $photo = DB::table($this->db_gallery)->orderBy('id', 'DESC')->get();
        return view('Backend.gallery.photo.photos', compact('photo'));
    }


    /**
     * Store a new photo in the gallery.
     *
     * This method handles the request to store a new photo in the photo gallery. It validates the incoming request data, 
     * processes the image, saves it to the designated folder, and then stores the relevant data in the `photos` table.
     * If the operation is successful, it redirects back to the photo gallery with a success notification.
     *
     * @param  \Illuminate\Http\Request  $request  The incoming HTTP request containing the photo data.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Store_Photos(Request $request)
    {
        // Validate the request data
        $validate = $request->validate([
            "title_bn" => "required",
            "title_en" => "required",
            "type" => "required",
            "photo" => "required",
        ]);

        // Prepare data for insertion
        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();

        // Handle the photo upload
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/photo_gallery/' . $image_one);
            $data['photo'] = 'images/photo_gallery/' . $image_one; // Save the photo path
        }

        // Insert the data into the database
        DB::table($this->db_gallery)->insert($data);

        // Prepare and return the success notification
        $notification = array('messege' => 'Add New Photo Successfully!', 'alert-type' => 'success');
        return redirect()->route('photos.gallery')->with($notification);
    }


    /**
     * Show the form for editing the specified photo in the gallery.
     *
     * This method retrieves the specific photo from the database using its ID and displays the edit form for the user 
     * to update the photo details.
     *
     * @param  int  $id  The ID of the photo to be edited.
     * @return \Illuminate\View\View
     */
    public function Photo_Gallery_Edit($id)
    {
        // Retrieve the specific photo by its ID
        $edit = DB::table($this->db_gallery)->where('id', $id)->first();

        // Return the edit view with the retrieved photo data
        return view('Backend.gallery.photo.update', compact('edit'));
    }






    /**
     * Update the specified photo in the gallery.
     *
     * This method updates the details of a specific photo in the gallery. If a new image is provided, it replaces the 
     * old image and deletes it from the server.
     *
     * @param  \Illuminate\Http\Request  $request  The incoming request with photo data.
     * @param  int  $id  The ID of the photo to be updated.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Photo_Update(Request $request, $id)
    {
        // Prepare the data for updating
        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();

        $image = $request->photo;

        if ($image) {
            // Retrieve the existing photo to delete the old image file
            $photo_data = DB::table($this->db_gallery)->where('id', $id)->first();
            $old_image = $photo_data->photo;

            if (file_exists($old_image)) {
                unlink($old_image); // Delete the old image file from the server
            }

            // Generate a new image name and save the new image
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/photo_gallery/' . $image_one);
            $data['photo'] = 'images/photo_gallery/' . $image_one;
        }

        // Update the database with the new photo data
        DB::table($this->db_gallery)->where('id', $id)->update($data);

        $notification = array('messege' => 'Gallery Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('photos.gallery')->with($notification);
    }



    /**
     * Delete a photo from the gallery.
     *
     * This method deletes a specific photo from the gallery based on its ID. It also removes the associated image file from the server.
     *
     * @param  \Illuminate\Http\Request  $request  The incoming request containing the photo ID.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Gallery_Delete(Request $request)
    {
        $id = $request->id;

        // Retrieve the photo data to get the image path
        $Photo_Gallery = DB::table($this->db_gallery)->where('id', $id)->first();

        if ($Photo_Gallery) {
            $img = $Photo_Gallery->photo;

            // Check if the image file exists and delete it
            if (file_exists($img)) {
                unlink($img);
            }

            // Delete the photo entry from the database
            DB::table($this->db_gallery)->where('id', $id)->delete();

            $notification = array('messege' => 'Photo Gallery Deleted Successfully!', 'alert-type' => 'success');
            return redirect()->route('photos.gallery')->with($notification);
        }

        // Handle the case where the photo does not exist
        $notification = array('messege' => 'Photo Not Found!', 'alert-type' => 'error');
        return redirect()->route('photos.gallery')->with($notification);
    }
}
