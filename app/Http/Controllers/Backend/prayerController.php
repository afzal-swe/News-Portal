<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class prayerController extends Controller
{
    //
    private $db_prayers;



    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_prayers` property with the name of the database table used for storing prayer resources.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_prayers = "prayers";
    }



    /**
     * Handle the creation or update of a prayer resource.
     *
     * This method checks if a prayer resource exists in the database. If no prayer resource is found, it returns a view for creating a new prayer. If a prayer resource is found, it returns a view for updating the existing prayer, passing the prayer data to the view.
     *
     * @return \Illuminate\View\View
     */
    public function Prayer_Create()
    {

        $prayer = DB::table($this->db_prayers)->first();

        if ($prayer == Null) {

            return view('Backend.setting.prayer.create');
        } else {

            return view('Backend.setting.prayer.update', compact('prayer'));
        }
    }




    /**
     * Store a new prayer resource in the database.
     *
     * This method retrieves prayer time data from the request, constructs an array of this data, and inserts it into the database. It then redirects the user to the prayer creation page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Prayer_Store(Request $request)
    {


        $data = array();
        $data['fajr_en'] = $request->fajr_en;
        $data['fajr_bn'] = $request->fajr_bn;
        $data['dhuhr_en'] = $request->dhuhr_en;
        $data['dhuhr_bn'] = $request->dhuhr_bn;
        $data['asr_en'] = $request->asr_en;
        $data['asr_bn'] = $request->asr_bn;
        $data['maghrib_en'] = $request->maghrib_en;
        $data['maghrib_bn'] = $request->maghrib_bn;
        $data['isha_en'] = $request->isha_en;
        $data['isha_bn'] = $request->isha_bn;
        $data['jummah_en'] = $request->jummah_en;
        $data['jummah_bn'] = $request->jummah_bn;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_prayers)->insert($data);

        $notification = array('messege' => 'Prayer Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('prayer.create')->with($notification);
    }


    /**
     * Update an existing prayer resource in the database.
     *
     * This method retrieves updated prayer time data from the request, constructs an array of this data, and updates the corresponding record in the database based on the provided ID. It then redirects the user to the prayer creation page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Prayer_Update(Request $request, $id)
    {

        $data = array();
        $data['fajr_en'] = $request->fajr_en;
        $data['fajr_bn'] = $request->fajr_bn;
        $data['dhuhr_en'] = $request->dhuhr_en;
        $data['dhuhr_bn'] = $request->dhuhr_bn;
        $data['asr_en'] = $request->asr_en;
        $data['asr_bn'] = $request->asr_bn;
        $data['maghrib_en'] = $request->maghrib_en;
        $data['maghrib_bn'] = $request->maghrib_bn;
        $data['isha_en'] = $request->isha_en;
        $data['isha_bn'] = $request->isha_bn;
        $data['jummah_en'] = $request->jummah_en;
        $data['jummah_bn'] = $request->jummah_bn;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_prayers)->where('id', $id)->update($data);

        $notification = array('messege' => 'Prayer Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('prayer.create')->with($notification);
    }
}
