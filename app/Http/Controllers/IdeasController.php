<?php

namespace App\Http\Controllers;
use App\Models\Category_ideas;
use App\Models\Ideas;
use App\Models\Comment;
use App\Models\Topic;
use Illuminate\Http\Request;
use DB;
use Auth;
use Overtrue;
use sessions;
class IdeasController extends Controller
{
    public function submit_idea(){
        $topic = Topic::all();
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        return view('pages.submit_idea')->with(compact('category','topic'));
    }
    public function insert_idea(request $request){
        $data = $request->all();
        $idea = new Ideas();
        // dd($data);
        $idea->idea_article = $data['idea_article'];
        $idea->idea_slug = $data['idea_slug'];
        $idea->idea_desc = $data['idea_desc'];
        $idea->idea_sum = $data['idea_sum'];
        $idea->idea_author = $data['idea_author'];
        $idea->idea_author_email = $data['idea_email'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $idea->created_at = now();
        // $idea->idea_document = $data['idea_doc'];
        // $idea->created_at = $data['idea_article'];
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
    }
    //commnet
    public function add_comment(request $request){
        $data = $request->all();
        $comment = new Comment();
        $comment->comment_user_name = $data['user_name'];
        $comment->comment_user_email = $data['user_email'];
        $comment->comment_content = $data['comment_content'];
        $comment->comment_by = $data['post_as'];
        $comment->idea_id = $data['idea_id'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $comment->created_comment_at = now();
        $comment->save();
        return redirect()->back();
    }
    //review_ideas_by_deparment
    public function review_ideas_by_deparment(Request $request,$slug){
        // $ideas = Ideas::orderby('idea_id',"desc")->Paginate(5);
        $category_by_slug = DB::table('tbl_ideas')
        ->join('tbl_category_ideas','tbl_ideas.category_id','=','tbl_category_ideas.category_id')
        ->where('tbl_category_ideas.category_idea_slug',$slug)->paginate(5);
        $category_name = DB::table('tbl_category_ideas')->where('category_idea_slug', $slug)->limit(1)->get();
        $category = Category_ideas::orderBy('category_id', 'desc')->get();

        return view('admin.review_idea_by_deparment')->with(compact('category','category_by_slug','category_name'));
    }
    //Admin function
    public function add_topic(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();

        return view('admin.add_topic',compact('category'));
    }
    public function insert_topic(request $request){
        $data = $request->all();
        // dd($data);
        $topic = new Topic();
        $topic->topic_name = $data['topic_name'];
        $topic->topic_slug = $data['topic_slug'];
        $topic->due_date = $data['due_date'];
        $topic->save();

        return redirect()->back()->with('message','Insert topic successfully');
    }
}
