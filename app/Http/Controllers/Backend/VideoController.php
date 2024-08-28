<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VideoController extends Controller
{
    //
    private $db_video;



    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_video` property with the name of the database table used for storing video data.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_video = "videos";
    }



    /**
     * Display a view of the video gallery.
     *
     * This method retrieves all video records from the `videos` table in the database, ordered by ID in descending order, and returns a view with the video data.
     *
     * @return \Illuminate\View\View
     */
    public function Video_Gallery()
    {

        $video = DB::table($this->db_video)->orderBy('id', 'DESC')->get();
        return view('Backend.gallery.video.video', compact('video'));
    }



    /**
     * Store a new video entry in the database.
     *
     * This method retrieves video data from the request, constructs an array with the data, and inserts it into the `videos` table in the database. It then redirects the user to the video gallery page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Store_Video(Request $request)
    {

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();


        DB::table($this->db_video)->insert($data);

        $notification = array('messege' => 'Add New Video Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }



    /**
     * Display the form to edit a specific video entry.
     *
     * This method retrieves the video data for the given ID from the database and returns a view with the video data for editing.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function Video_Edit($id)
    {

        $edit_video = DB::table($this->db_video)->where('id', $id)->first();
        return view('Backend.gallery.video.update', compact('edit_video'));
    }



    /**
     * Update an existing video entry in the database.
     *
     * This method retrieves updated video data from the request, constructs an array with the data, and updates the corresponding video record in the database based on the provided ID. It then redirects the user to the video gallery page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Video_Update(Request $request, $id)
    {

        $data = array();
        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();


        DB::table($this->db_video)->where('id', $id)->update($data);

        $notification = array('messege' => 'Video Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }



    /**
     * Delete a specific video entry from the database.
     *
     * This method deletes the video record identified by the provided ID from the database. It then redirects the user to the video gallery page with a success notification.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function Video_Delete($id)
    {

        DB::table($this->db_video)->where('id', $id)->delete();

        $notification = array('messege' => 'Video Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('video.gallery')->with($notification);
    }
}
