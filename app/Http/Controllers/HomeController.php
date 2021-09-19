<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;
use App\Models\Ideas;
use DB;
class HomeController extends Controller
{
    public function index(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $ideas = Ideas::Paginate(5);
        // dd($category);
        return view('pages.home')->with(compact('category','ideas'));
    }
    public function show_by_category(Request $request,$slug){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $category_by_slug = DB::table('tbl_ideas')
        ->join('tbl_category_ideas','tbl_ideas.category_id','=','tbl_category_ideas.category_id')
        ->where('tbl_category_ideas.category_idea_slug',$slug)->paginate(5);
        $category_name = DB::table('tbl_category_ideas')->where('category_idea_slug', $slug)->limit(1)->get();

        return view('pages.show_by_category')->with(compact('category','category_by_slug','category_name'));
    }

}
