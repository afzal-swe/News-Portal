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


    /**
     * Constructor method.
     *
     * This constructor method initializes the class by setting the `$this->db_category` property 
     * to the name of the database table `"categories"`. This property will be used to reference the 
     * categories table throughout the class.
     */
    public function __construct()
    {
        $this->db_category = "categories";
    }


    /**
     * Display and view all categories.
     *
     * This method retrieves all category records from the database, ordered by their ID in descending order,
     * and passes the retrieved categories data to the 'Backend.category.category_view' view for display.
     *
     * @return \Illuminate\View\View
     */
    public function Category_View()
    {
        $category = DB::table($this->db_category)->orderBy('id', 'DESC')->get();
        // dd($category);
        return view('Backend.category.category_view', compact('category'));
    }




    /**
     * Store a newly created category.
     *
     * This method handles the addition of a new category. It first validates the incoming request to ensure that both 
     * 'category_bn' and 'category_en' fields are present and unique within the categories table. Custom validation messages
     * are provided for missing fields. Upon successful validation, the method prepares the data for insertion, including
     * generating a slug from the 'category_bn' field and setting the creation timestamp. The category data is then inserted
     * into the database. After successful addition, a success notification is prepared, and the user is redirected to 
     * the category view page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Add_Category(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'category_bn' => 'required|unique:categories|max:255',
            'category_en' => 'required|unique:categories|max:255',

        ], [
            'category_bn.required' => 'This category bn is required',
            'category_en.required' => 'This category en is required',
        ]);

        $data = array();
        $data['category_bn'] = $request->category_bn;
        $data['category_en'] = $request->category_en;
        $data['status'] = $request->status;
        $data['slug'] = Str::of($request->category_bn)->slug('-');
        $data['created_at'] = Carbon::now();

        DB::table($this->db_category)->insert($data);

        $notification = array('messege' => 'Category Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('Category_View')->with($notification);
    }



    /**
     * Show the form for editing a category.
     *
     * This method retrieves the category record with the specified slug from the database and passes the 
     * category data to the 'Backend.category.category_edit' view for editing.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function Edit_Category($slug)
    {
        $edit = DB::table($this->db_category)->where('slug', $slug)->first();
        return view('Backend.category.category_edit', compact('edit'));
    }





    /**
     * Update an existing category.
     *
     * This method handles the updating of a category. It first validates the incoming request to ensure that both 
     * 'category_bn' and 'category_en' fields are present and meet the specified criteria. Upon successful validation,
     * the method prepares the updated data, including generating a new slug from the 'category_bn' field and setting
     * the updated timestamp. The category record with the specified slug is then updated in the database. After successful
     * update, a success notification is prepared, and the user is redirected to the category view page with the notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Update_Category(Request $request)
    {
        $update = $request->slug;


        $validated = $request->validate([
            'category_bn' => 'required|max:255',
            'category_en' => 'required|max:255',

        ]);

        $data = array();
        $data['category_bn'] = $request->category_bn;
        $data['category_en'] = $request->category_en;
        $data['status'] = $request->status;
        $data['slug'] = Str::of($request->category_bn)->slug('-');
        $data['updated_at'] = Carbon::now();

        DB::table($this->db_category)->where('slug', $update)->update($data);

        $notification = array('messege' => 'Category Added Successfully!', 'alert-type' => 'success');
        return redirect()->route('Category_View')->with($notification);
    }



    /**
     * Delete a category.
     *
     * This method deletes a category record from the database based on the specified slug. After successful deletion,
     * a success notification is prepared, and the user is redirected to the category view page with the notification.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Delete_Category($slug)
    {

        DB::table($this->db_category)->where('slug', $slug)->delete();

        $notification = array('messege' => 'Category Delete Successfully!', 'alert-type' => 'success');
        return redirect()->route('Category_View')->with($notification);
    }
}
