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

    /**
     * Show the login form.
     *
     * This method returns the view for the login form. It simply loads the 'Backend.Author.login' view.
     *
     * @return \Illuminate\View\View
     */
    public function login_from()
    {
        return view('Backend.Author.login');
    }


    /**
     * Handle user login.
     *
     * This method handles the login process for a user. It first validates the incoming request data to ensure
     * that the 'email' and 'password' fields are present and meet specified criteria. If validation fails,
     * an error response is returned. If validation passes, it attempts to authenticate the user using the
     * provided credentials. If authentication is successful, it checks the user's status and redirects them
     * to the appropriate route. If authentication fails, the user is redirected back to the login page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            "email" => 'required|email|exists:users',
            "password" => 'required',
        ], [
            "email.required" => "This email is required",
            "password.required" => "This password is required",
        ]);

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

    /**
     * Create a new user.
     *
     * This method handles the creation of a new user. It first validates the incoming request data to ensure
     * that the 'name', 'email', and 'password' fields are present and meet specified criteria. If validation passes,
     * a new user is created using the provided data, with the password being hashed before storage. The new user is
     * assigned a default status of 0. After successful creation, the user is redirected to the admin login page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
