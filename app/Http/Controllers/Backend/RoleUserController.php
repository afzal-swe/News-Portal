<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RoleUserController extends Controller
{
    //

    private $User_Role;


    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$User_Role` property with the name of the database table used for storing user roles.
     *
     * @return void
     */
    public function __construct()
    {
        $this->User_Role = "role";
    }

    /**
     * Display all roles.
     *
     * This method retrieves all role records from the specified database table and passes the retrieved
     * role data to the 'Backend.role.view_role' view for display.
     *
     * @return \Illuminate\View\View
     */
    public function Role_View()
    {
        $all_role = DB::table($this->User_Role)->get();
        return view('Backend.role.view_role', compact('all_role'));
    }


    /**
     * Show the form for creating a new role.
     *
     * This method returns the view for creating a new role. It simply loads the 'Backend.role.create_role' view.
     *
     * @return \Illuminate\View\View
     */
    public function Role_Create()
    {
        return view('Backend.role.create_role');
    }


    /**
     * Store a newly created role.
     *
     * This method handles the creation of a new role. It first validates the incoming request to ensure
     * that the 'role_name' field is present and meets specified criteria. If validation passes, the role data
     * is prepared and inserted into the specified database table. After successful insertion, the user is
     * redirected to the role view page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Role_Store(Request $request)
    {
        $request->validate([
            'role_name' => ['required', 'string', 'max:255'],
        ]);

        $data = array();
        $data['role_name'] = $request->role_name ?? "Null";
        $data['status'] = $request->status ?? "Null";
        $data['created_at'] = Carbon::now();

        DB::table($this->User_Role)->insert($data);
        return redirect()->route('role.view');
    }
}
