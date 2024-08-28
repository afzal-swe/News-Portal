<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\Carbon;

class SubcategoryController extends Controller
{
    //
    private $db_subcategory;
    private $db_category;



    /**
     * Create a new instance of the class.
     *
     * This constructor initializes the `$db_category` and `$db_subcategory` properties with the names of the database tables used for storing categories and subcategories, respectively.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_category = "categories";
        $this->db_subcategory = "subcategory";
    }



    /**
     * Display a view of subcategories and categories.
     *
     * This method retrieves a list of subcategories joined with their corresponding categories from the database. It also retrieves a list of all categories. The method then returns a view with the retrieved subcategories and categories data.
     *
     * @return \Illuminate\View\View
     */
    public function Subategory_View()
    {
        $sub_category = DB::table($this->db_subcategory)
            ->join('categories', 'subcategory.category_id', 'categories.id')
            ->select('categories.category_en', 'subcategory.*')
            ->orderBy('id', 'DESC')->get();
        $category = DB::table($this->db_category)->get();
        return view('Backend.subcategory.view_subcategory', compact('sub_category', 'category'));
    }




    /**
     * Create a new subcategory and store it in the database.
     *
     * This method validates the request data, constructs an array of the validated data, and inserts it into the subcategory table in the database. It then redirects the user to the subcategory view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Create_Subcategory(Request $request)
    {
        $validated = $request->validate([
            "category_id" => "required",
            "subcategory_bn" => "required",
            "subcategory_en" => "required"
        ]);

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_bn'] = $request->subcategory_bn;
        $data['subcategory_en'] = $request->subcategory_en;
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        DB::table($this->db_subcategory)->insert($data);

        $notification = array('messege' => 'Sub-category Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('Subategory_View')->with($notification);
    }





    /**
     * Display the edit form for a specific subcategory.
     *
     * This method retrieves the subcategory data for the given ID from the database and also retrieves all categories. It then returns a view with the subcategory data and category list for editing.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function Subcategory_Edit($id)
    {

        $edit = DB::table($this->db_subcategory)->where('id', $id)->first();
        $category = DB::table($this->db_category)->get();
        return view('Backend.subcategory.edit_subcategory', compact('edit', 'category'));
    }




    /**
     * Update an existing subcategory in the database.
     *
     * This method retrieves updated subcategory data from the request, constructs an array of this data, and updates the corresponding subcategory record in the database based on the provided ID. It then redirects the user to the subcategory view page with a success notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Update_Subcategory(Request $request)
    {

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_bn'] = $request->subcategory_bn;
        $data['subcategory_en'] = $request->subcategory_en;
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_subcategory)->where('id', $request->id)->update($data);

        $notification = array('messege' => 'Sub-category Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('Subategory_View')->with($notification);
    }





    /**
     * Delete a specific subcategory from the database.
     *
     * This method deletes the subcategory record identified by the provided ID from the database. It then redirects the user to the subcategory view page with a success notification.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Subcategory_Delete($id)
    {

        DB::table($this->db_subcategory)->where('id', $id)->delete();

        $notification = array('messege' => 'Sub-category Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('Subategory_View')->with($notification);
    }
}
