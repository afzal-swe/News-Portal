<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePostController extends Controller
{
    //

    private $db_post;

    public function __construct()
    {
        $this->db_post = "posts";
    }


    // View Single Post Section
    public function Single_Post(Request $request, $slug)
    {

        $post = DB::table($this->db_post)
            ->join('categories', 'posts.cat_id', 'categories.id')
            ->join('subcategory', 'posts.subcat_id', 'subcategory.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.*', 'categories.category_bn', 'categories.category_en', 'subcategory.subcategory_bn', 'subcategory.subcategory_en', 'users.name')
            ->where('posts.slug', $slug)
            ->first();

        return view('Frontend.post.single_post', compact('post'));
    }

    // Category wise Product Show
    public function Sub_Category_View(Request $request, $id)
    {

        $Sub_Category = DB::table($this->db_post)->where('subcat_id', $id)->orderBy('id', 'DESC')->paginate(16);
        // dd($Sub_Category);

        return view('Frontend.post.sub_category_post', compact('Sub_Category'));
    }

    // // Category News Post View
    public function Category_Post(Request $request, $id)
    {

        $Sub_Category = DB::table($this->db_post)->where('cat_id', $id)->orderBy('id', 'DESC')->paginate(16);
        // dd($Sub_Category);

        return view('Frontend.post.sub_category_post', compact('Sub_Category'));
    }
}
