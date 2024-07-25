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

    public function __construct()
    {
        $this->db_prayers = "prayers";
    }

    // Prayer Create and Update Function
    public function Prayer_Create()
    {

        $prayer = DB::table($this->db_prayers)->first();

        if ($prayer == Null) {

            return view('Backend.setting.prayer.create');
        } else {

            return view('Backend.setting.prayer.update', compact('prayer'));
        }
    }

    // Prayer Store Function
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

    // Update Function
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
