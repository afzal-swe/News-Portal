<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    private $db_tableUser;

    public function __construct()
    {
        $this->db_tableUser = 'users';
    }

    public function view_user()
    {
        $all_user = DB::table($this->db_tableUser)->orderBy('id', "DESC")->get();
        return view('Backend.User.view_user', compact('all_user'));
    }


    public function  Create_user()
    {
        return view('Backend.User.create_user');
    }

    public function store_user(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required'],
            'status' => ['required'],
            'parmission' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required'],
        ]);

        DB::table($this->db_tableUser)->insert([
            // User::create([

            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'status' => $request->status,
            'phone' => $request->phone,
            'address' => $request->address,
            'parmission' => $request->parmission,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('dashboard');
    }
}
