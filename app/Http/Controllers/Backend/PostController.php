<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    //
    private $db_post;
    private $db_category;
    private $db_sub_category;
    private $db_district;
    private $db_sub_district;

    public function __construct()
    {
        $this->db_post = "posts";
        $this->db_category = "categories";
        $this->db_sub_category = "subcategory";
        $this->db_district = "districts";
        $this->db_sub_district = "sub_districts";
    }

    // View All Post Function
    public function All_Post()
    {

        // $post = DB::table($this->db_post)
        //     ->join('categories', 'posts.cat_id', 'categories.id')
        //     ->join('subcategory', 'posts.subcat_id', 'subcategory.id')
        //     ->join('districts', 'posts.dist_id', 'districts.id')
        //     ->join('sub_districts', 'posts.subdist_id', 'sub_districts.id')
        //     ->select('posts.*', 'categories.category_bn', 'subcategory.subcategory_bn')
        //     ->get();
        $post = DB::table($this->db_post)
            ->join('categories', 'posts.cat_id', 'categories.id')
            ->join('subcategory', 'posts.subcat_id', 'subcategory.id')
            ->select('posts.*', 'categories.category_bn', 'subcategory.subcategory_bn')
            ->get();

        // dd($post);

        return view('Backend.post.view_post', compact('post'));
    }

    // Create Post Function
    public function Create_Post()
    {

        $category = DB::table($this->db_category)->get();
        $sub_cat = DB::table($this->db_sub_category)->get();
        $district = DB::table($this->db_district)->get();
        $sub_dis = DB::table($this->db_sub_district)->get();
        return view('Backend.post.create_post', compact('category', 'district', 'sub_cat', 'sub_dis'));
    }

    // Post Store
    public function Post_Create(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'cat_id' => 'required',
            'dist_id' => 'required',
            'details_en' => 'required',
            'details_bn' => 'required',
            'tags_en' => 'required',
            'tags_bn' => 'required',
            'image' => 'required',
        ]);

        $data = array();
        $data['cat_id'] = $request->cat_id;
        $data['subcat_id'] = $request->subcat_id;
        $data['dist_id'] = $request->dist_id;
        $data['subdist_id'] = $request->subdist_id;
        $data['user_id'] = Auth::user()->id;
        $data['title_en'] = $request->title_en;
        $data['title_bn'] = $request->title_bn;
        $data['details_en'] = $request->details_en;
        $data['details_bn'] = $request->details_bn;
        $data['tags_en'] = $request->tags_en;
        $data['tags_bn'] = $request->tags_bn;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['slug'] = Str::of($request->title_en)->slug('-');
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date('F');
        $data['status'] = $request->status;
        $data['created_at'] = Carbon::now();

        $image = $request->image;
        //single thumbnail
        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/post_images/' . $image_one);
            $data['image'] = 'images/post_images/' . $image_one;   // public/files/product/plus-point.jpg
        }

        DB::table($this->db_post)->insert($data);

        $notification = array('messege' => 'Post Create Successfully!', 'alert-type' => 'success');
        return redirect()->route('post.view')->with($notification);
    }


    // Post Edit Function
    public function Post_Edit(Request $request)
    {
        $edit = $request->id;

        $edit_post = DB::table($this->db_post)->where('id', $edit)->first();

        $category = DB::table($this->db_category)->get();
        $sub_cat = DB::table($this->db_sub_category)->get();
        $district = DB::table($this->db_district)->get();
        $sub_dis = DB::table($this->db_sub_district)->get();
        return view('Backend.post.update_post', compact('category', 'sub_cat', 'district', 'sub_dis', 'edit_post'));
    }

    // Update Post Function 
    public function Post_Update(Request $request, $id)
    {
        // dd($request->all());

        // $update = $request->id;

        $data = array();
        $data['cat_id'] = $request->cat_id;
        $data['subcat_id'] = $request->subcat_id;
        $data['dist_id'] = $request->dist_id;
        $data['subdist_id'] = $request->subdist_id;
        // $data['user_id'] = Auth::user()->id;
        $data['title_en'] = $request->title_en;
        $data['title_bn'] = $request->title_bn;
        $data['details_en'] = $request->details_en;
        $data['details_bn'] = $request->details_bn;
        $data['tags_en'] = $request->tags_en;
        $data['tags_bn'] = $request->tags_bn;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['slug'] = Str::of($request->title_en)->slug('-');
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date('F');
        $data['status'] = $request->status;
        $data['updated_at'] = Carbon::now();

        $image = $request->image;
        $oldimage = $request->oldimage;
        //single thumbnail
        if ($image) {

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 310)->save('images/post_images/' . $image_one);
            $data['image'] = 'images/post_images/' . $image_one;   // public/files/product/plus-point.jpg

            DB::table($this->db_post)->where('id', $id)->update($data);
            unlink($oldimage);

            $notification = array('messege' => 'Post Update Successfully!', 'alert-type' => 'success');
            return redirect()->route('post.view')->with($notification);
        }
        // jodi image na thake ta hole
        $data['image'] = $oldimage;
        DB::table($this->db_post)->where('id', $id)->update($data);

        $notification = array('messege' => 'Post Update Successfully!', 'alert-type' => 'success');
        return redirect()->route('post.view')->with($notification);
    }

    // Delete Post Function
    public function Post_Delete(Request $request)
    {
        $id = $request->id;

        $post = DB::table($this->db_post)->where('id', $id)->first();
        // dd($post);
        if ($post !== 'image') {
            $img = $post->image;
            unlink($img);
            DB::table($this->db_post)->where('id', $id)->delete();

            $notification = array('messege' => 'Post Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('post.view')->with($notification);
        } else {
            DB::table($this->db_post)->where('id', $id)->delete();

            $notification = array('messege' => 'Post Delete Successfully!', 'alert-type' => 'success');
            return redirect()->route('post.view')->with($notification);
        }
    }
}
