<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    private $db_category;

    public function __construct()
    {
        $this->db_category = "categories";
    }

    public function Category_View()
    {
        $category = DB::table($this->db_category)->get();
        return view('Backend.category.category_view', compact('category'));
    }

    public function Add_Category(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'category_bn' => 'required|unique:categories|max:255',
            'category_en' => 'required|unique:categories|max:255',

        ]);

        $data = array();
        $data['category_bn'] = $request->category_bn;
        $data['category_en'] = $request->category_en;
        $data['status'] = $request->status;
        $data['slug'] = Str::of($request->category_bn)->slug('-');
        $data['created_at'] = Carbon::now();

        DB::table($this->db_category)->insert($data);

        return redirect()->route('Category_View');
    }
}
