<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NoticesController extends Controller
{
    //
    private $db_notices;



    /**
     * Constructor to initialize class properties.
     */
    public function __construct()
    {
        // Initialize the database table name for notices
        $this->db_notices = "notices";
    }



    public function Notice()
    {
        // Fetch the first notice from the notices table
        $notice = DB::table($this->db_notices)->first();

        // Check if there is no existing notice
        if ($notice == null) {
            // Return the view to create a new notice
            return view('Backend.setting.notices.create');
        } else {
            // Return the view to update the existing notice
            return view('Backend.setting.notices.update', compact('notice'));
        }
    }



    public function Notice_Store(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'notice_bn' => 'required',
                'notice_en' => 'required',
            ]);

            // Prepare the data for insertion
            $data = array();
            $data['notice_bn'] = $request->notice_bn;
            $data['notice_en'] = $request->notice_en;
            $data['status'] = $request->status;
            $data['created_at'] = Carbon::now();

            // Insert data into the database
            DB::table($this->db_notices)->insert($data);

            // Redirect with a success notification
            $notification = array('messege' => 'Notice Created Successfully!', 'alert-type' => 'success');
            return redirect()->route('notice')->with($notification);
        } catch (\Exception $e) {
            // Handle any errors that occur during insertion
            $notification = array('messege' => 'An error occurred: ' . $e->getMessage(), 'alert-type' => 'error');
            return redirect()->route('notice')->with($notification);
        }
    }


    public function Notice_Update(Request $request, $id)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'notice_bn' => 'required',
                'notice_en' => 'required',
            ]);

            // Prepare the data for updating
            $data = array();
            $data['notice_bn'] = $request->notice_bn;
            $data['notice_en'] = $request->notice_en;
            $data['status'] = $request->status;
            $data['updated_at'] = Carbon::now();

            // Update the record in the database
            DB::table($this->db_notices)->where('id', $id)->update($data);

            // Redirect with a success notification
            $notification = array('messege' => 'Notice Updated Successfully!', 'alert-type' => 'success');
            return redirect()->route('notice')->with($notification);
        } catch (\Exception $e) {
            // Handle any errors that occur during the update
            $notification = array('messege' => 'An error occurred: ' . $e->getMessage(), 'alert-type' => 'error');
            return redirect()->route('notice')->with($notification);
        }
    }
}
