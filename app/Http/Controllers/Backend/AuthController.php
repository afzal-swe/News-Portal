<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function login_from()
    {
        return view('Backend.Author.login');
    }

    public function login(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            "email" => 'required|email|exists:users',
            "password" => 'required',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return Response(['message' => $validator->errors()], 401);
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            if (Auth::user()->status == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home_page');
            }
        }

        return redirect()->back();
    }

    public function register_from()
    {
        return view('Backend.Author.register');
    }

    public function user_create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required'],
        ]);
        // dd($request->all());

        $user = User::create([

            'name' => $request->name,
            // 'user_name' => $request->user_name,
            'email' => $request->email,
            'status' => 0,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin_login');
    }

    public function Admin_dashboard()
    {
        // if (Auth::check()) {

        //     return view('Backend.layouts.master');
        // } else {
        //     return redirect()->route('admin_login');
        // }

        return view('Backend.layouts.master');
    }

    public function Admin_logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
