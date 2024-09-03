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
    private $db_role;

    public function __construct()
    {
        $this->db_tableUser = 'users';
        $this->db_role = 'role';
    }

    /**
     * Display all users.
     *
     * This method retrieves all user records from the specified database table, ordered by their ID in descending order.
     * It then passes the retrieved user data to the 'Backend.User.view_user' view for display.
     *
     * @return \Illuminate\View\View
     */
    public function view_user()
    {
        $all_user = DB::table($this->db_tableUser)->orderBy('id', "DESC")->get();
        return view('Backend.User.view_user', compact('all_user'));
    }



    /**
     * Show the form for creating a new user.
     *
     * This method returns the view for creating a new user. It simply loads the 'Backend.User.create_user' view.
     *
     * @return \Illuminate\View\View
     */
    public function Create_user()
    {

        $parmission = DB::table($this->db_role)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.User.create_user', compact('parmission'));
    }


    /**
     * Store a newly created user.
     *
     * This method handles the creation of a new user. It first validates the incoming request to ensure
     * that all required fields are present and meet specified criteria. If validation passes, the user data
     * is inserted into the specified database table. The password is hashed before being stored. After successful
     * insertion, the user is redirected to the dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'status' => $request->status,
            'phone' => $request->phone,
            'address' => $request->address,
            'parmission' => $request->parmission,
            'password' => Hash::make($request->password),
        ]);

        // $notification = array('message' => 'User Added Successfully', 'alert-type' => 'success');
        $notification = array('messege' => 'Services Create Successfully!', 'alert-type' => 'success');
        return redirect()->route('view_user')->with($notification);
    }





    /**
     * Display the form to edit a specific user.
     *
     * This method retrieves the user's details by their ID and fetches all active roles or permissions. 
     * It then returns the view for editing the user's information, passing the user details and permissions to the view.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function User_Edit($id)
    {

        $user_edit = DB::table($this->db_tableUser)->where('id', $id)->first();
        $parmission = DB::table($this->db_role)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('Backend.User.edit_user', compact('user_edit', 'parmission'));
    }








    /**
     * Update a user's information.
     *
     * This method updates the specified user's details in the 'users' table, including their name, username, status,
     * phone number, and address. After the update, it redirects to the 'view_user' route with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function User_Update(Request $request)
    {

        $user_id = $request->id;


        DB::table($this->db_tableUser)->where('id', $user_id)->update([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'status' => $request->status,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $notification = array('messege' => 'User Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('view_user')->with($notification);
    }










    /**
     * Delete a specific user.
     *
     * This method deletes the user with the specified ID from the 'users' table. After deletion, it redirects to
     * the 'view_user' route with a success notification.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function User_Delete($id)
    {

        DB::table($this->db_tableUser)->where('id', $id)->delete();
        $notification = array('messege' => 'Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('view_user')->with($notification);
    }
}
