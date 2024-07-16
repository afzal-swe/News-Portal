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

    public function __construct()
    {
        $this->User_Role = "role";
    }

    public function Role_View()
    {

        $all_role = DB::table($this->User_Role)->get();
        return view('Backend.role.view_role', compact('all_role'));
    }

    public function Role_Create()
    {
        return view('Backend.role.create_role');
    }

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
