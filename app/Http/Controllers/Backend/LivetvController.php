<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LivetvController extends Controller
{
    //
    private $db_livetv;



    /**
     * Constructor for the class.
     *
     * Initializes the database table name for Live TV management.
     */
    public function __construct()
    {
        $this->db_livetv = "livetv";
    }


    /**
     * Show the form for creating a new Live TV setting or updating an existing one.
     *
     * @return \Illuminate\View\View
     */
    public function Live_TV()
    {
        // Fetch the first record from the 'livetv' table
        $livetv = DB::table($this->db_livetv)->first();

        // Check if a Live TV setting exists
        if ($livetv == null) {
            // If no Live TV record exists, show the create form
            return view('Backend.setting.livetv.create');
        } else {
            // If a Live TV record exists, show the update form
            return view('Backend.setting.livetv.update', compact('livetv'));
        }
    }



    /**
     * Store a newly created Live TV entry in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Livetv_Store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'embed_code' => ['required'],
        ]);

        // Prepare the data to be inserted
        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        // Insert the data into the 'livetv' table
        DB::table($this->db_livetv)->insert($data);

        // Create a success notification
        $notification = array('messege' => 'Live TV Added Successfully!', 'alert-type' => 'success');

        // Redirect to the 'livetv.option' route with the notification
        return redirect()->route('livetv.option')->with($notification);
    }




    /**
     * Update an existing Live TV entry in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Livetv_Update(Request $request, $id)
    {
        // Prepare the data to be updated
        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        // Update the Live TV entry in the 'livetv' table
        DB::table($this->db_livetv)->where('id', $id)->update($data);

        // Create a success notification
        $notification = array('messege' => 'Live TV Update Successfully!', 'alert-type' => 'success');

        // Redirect to the 'livetv.option' route with the notification
        return redirect()->route('livetv.option')->with($notification);
    }
}
