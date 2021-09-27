<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;
use App\Models\Ideas;
use App\Models\Comment;
use App\Models\thumb;
use DB;
use Overtrue;
use Auth;
use Session;
class HomeController extends Controller
{
    public function index(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $ideas = Ideas::orderby('idea_id',"desc")->Paginate(5);
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
    public function detail_idea(Request $request,$idea_slug){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();

        $comment = DB::table('tbl_comment')->join('tbl_ideas','tbl_ideas.idea_id','=','tbl_comment.idea_id')
        ->where('tbl_ideas.idea_slug',$idea_slug)->orderby('comment_id','desc')->paginate(5);

        $details_idea = DB::table('tbl_ideas')
        ->join('tbl_category_ideas','tbl_category_ideas.category_id','=','tbl_ideas.category_id')
        ->where('tbl_ideas.idea_slug',$idea_slug)->get();

        $count_commnet = DB::table('tbl_comment')->join('tbl_ideas','tbl_ideas.idea_id','=','tbl_comment.idea_id')
        ->where('tbl_ideas.idea_slug',$idea_slug)->count();

        $count_thumb_up = DB::table('tbl_thumb')
        ->join('tbl_ideas','tbl_ideas.idea_slug','=','tbl_thumb.idea_slug')
        ->where('thumb_status','0')->where('tbl_thumb.idea_slug',$idea_slug)->count();
        $count_thumb_down =  DB::table('tbl_thumb')
        ->join('tbl_ideas','tbl_ideas.idea_slug','=','tbl_thumb.idea_slug')
        ->where('thumb_status','1')->where('tbl_thumb.idea_slug',$idea_slug)->count();

        $thumb =  DB::table('tbl_thumb')->join('tbl_ideas','tbl_ideas.idea_slug','=','tbl_thumb.idea_slug')
        ->where('tbl_thumb.idea_slug',$idea_slug)->get();

        // Session::put('thumb_user_id',$thumb);

        return view('pages.detail_ideas')->with(compact('category','details_idea','comment','count_commnet','count_thumb_up','count_thumb_down','thumb'));
    }

}
