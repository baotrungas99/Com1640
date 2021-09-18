<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;
use DB;
class CategoryController extends Controller
{
    public function category_ideas(){
        return view('admin.category_ideas');
    }
    public function insert_category(request $request){
        $data = $request->all();
        // dd($data);
        $category = new Category_ideas();
        $category->category_idea_name = $data['category_name'];
        $category->category_idea_slug = $data['slug_category'];
        $category->category_idea_desc = $data['category_desc'];
        $category->save();

        return redirect()->back()->with('message','Insert category ideas successfully');
    }
    public function list_category_ideas(){
        $category = Category_ideas::paginate(5);

        return view('admin.list_category_ideas')->with(compact('category'));
    }
    public function delete_category_ideas($id){
        DB::table('tbl_category_ideas')->where('category_id', $id)->delete();

        return redirect()->back()->with('message','Delete category ideas successfully');
    }
}
