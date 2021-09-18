<?php

namespace App\Http\Controllers;
use App\Models\Category_ideas;
use App\Models\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function submit_idea(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        return view('pages.submit_idea')->with(compact('category'));
    }
    public function insert_idea(request $request){
        $data = $request->all();
        $idea = new Ideas();
        $idea->idea_article = $data['idea_article'];
        $idea->idea_slug = $data['idea_slug'];
        $idea->idea_desc = $data['idea_desc'];
        $idea->idea_author = $data['idea_author'];
        $idea->idea_author_email = $data['idea_email'];
        // $idea->idea_document = $data['idea_doc'];
        $idea->post_as = $data['post_as'];
        $idea->category_id = $data['category_id'];
        $get_file = $request->file('idea_doc');
        if($get_file) {
            $get_file_name = $get_file->getClientOriginalName();
            $name_file = current(explode('.', $get_file_name));
            $new_file = $name_file.rand(0,99).'.'.$get_file->getClientOriginalExtension();
            $get_file->move('public/upload/doc',$new_file);
            $idea->idea_document = $new_file;
            $idea->save();
            return redirect()->back()->with('message', 'upload idea successfully');
        }else{
            $idea->idea_document='';
            $idea->save();
            return redirect()->back()->with('message', 'upload idea successfully');
        }
        // $idea->created_at = $data['idea_article'];
    }
}
