<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;
use App\Models\Topic;
use DB;
class CategoryController extends Controller
{
    public function category_ideas(){
        $topic = Topic::all();
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        return view('admin.category_ideas')->with(compact('category','topic'));
    }
    public function insert_category(request $request){
        $data = $request->all();
        // dd($data);
        $category = new Category_ideas();
        $category->category_idea_name = $data['category_name'];
        $category->category_idea_slug = $data['slug_category'];
        $category->category_idea_desc = $data['category_desc'];
        $category->topic_id = $data['topic_id'];
        $category->save();

        return redirect()->back()->with('message','Insert category ideas successfully');
    }
    public function list_category_ideas(){
        $category = Category_ideas::paginate(5);
        $catebelongtopic = DB::table('tbl_category_ideas')->join('tbl_topic','tbl_topic.topic_id','=','tbl_category_ideas.topic_id')->paginate(5);
        return view('admin.list_category_ideas')->with(compact('category','catebelongtopic'));
    }
    public function delete_category_ideas($id){
        DB::table('tbl_category_ideas')->where('category_id', $id)->delete();

        return redirect()->back()->with('message','Delete category ideas successfully');
    }
}
