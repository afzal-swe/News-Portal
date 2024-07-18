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

    public function __construct()
    {
        $this->db_category = "categories";
        $this->db_subcategory = "subcategory";
    }

    public function Subategory_View()
    {
        $sub_category = DB::table($this->db_subcategory)
            ->join('categories', 'subcategory.category_id', 'categories.id')
            ->select('categories.category_en', 'subcategory.*')
            ->orderBy('id', 'DESC')->get();
        $category = DB::table($this->db_category)->get();
        return view('Backend.subcategory.view_subcategory', compact('sub_category', 'category'));
    }

    public function Create_Subcategory(Request $request)
    {
        // dd($request->all());
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

    // Edit sub category function
    public function Subcategory_Edit($id)
    {

        $edit = DB::table($this->db_subcategory)->where('id', $id)->first();
        $category = DB::table($this->db_category)->get();
        return view('Backend.subcategory.edit_subcategory', compact('edit', 'category'));
    }

    // Update subcategory function
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

    // Delete Sub Category function

    public function Subcategory_Delete($id)
    {

        DB::table($this->db_subcategory)->where('id', $id)->delete();

        $notification = array('messege' => 'Sub-category Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('Subategory_View')->with($notification);
    }
}
