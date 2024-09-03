<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //

    public function User_Profile()
    {

        $user_id = Auth::user()->id;
        $user = DB::table('users')->where('id', $user_id)->first();
        // dd($user);


        return view('Backend.User.profile.view', compact('user'));
    }
}
