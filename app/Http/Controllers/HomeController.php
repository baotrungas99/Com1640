<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category_ideas;
use App\Models\Ideas;
use Mail;
use App\Models\LikeDislike;
use App\Models\Comment;
use App\Models\User;
use App\Models\Topic;
use DB;
use Overtrue;
use Auth;
use Session;
// use Carbon\Carbon;
class HomeController extends Controller
{
    public function AuthLogin(){
        $id = Auth::id();
        if($id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('login')->send();
        }
    }
    public function index(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $ideas = Ideas::orderby('idea_id',"desc")->Paginate(5);
        $topic = Topic::all();
        // dd($category);
        // $today = Carbon::now();
        // dd($today);
        return view('pages.home')->with(compact('category','ideas','topic'));
    }
    public function show_by_category(Request $request,$slug){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $category_by_slug = DB::table('tbl_ideas')
        ->join('tbl_category_ideas','tbl_ideas.category_id','=','tbl_category_ideas.category_id')
        ->where('tbl_category_ideas.category_idea_slug',$slug)->paginate(5);
        $category_name = DB::table('tbl_category_ideas')->where('category_idea_slug', $slug)->limit(1)->get();
        $topic = Topic::all();
        return view('pages.show_by_category')->with(compact('category','category_by_slug','category_name','topic'));
    }
    public function detail_idea(Request $request,$idea_slug){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();

        $comment = DB::table('tbl_comment')->join('tbl_ideas','tbl_ideas.idea_id','=','tbl_comment.idea_id')
        ->where('tbl_ideas.idea_slug',$idea_slug)->orderby('comment_id','desc')->paginate(5);


        $details_idea= Ideas::where('idea_slug',$idea_slug)->get();

        $count_commnet = DB::table('tbl_comment')->join('tbl_ideas','tbl_ideas.idea_id','=','tbl_comment.idea_id')
        ->where('tbl_ideas.idea_slug',$idea_slug)->count();

        $user = User::withCount('likes')->get();

        $topic = Topic::all();

        return view('pages.detail_ideas', compact('category','details_idea','comment','count_commnet','user','topic'));
    }

    public function ajaxLike(Request $request){
        if(!auth()->check()){
          return response()->json(['failed' => 'you are not logged in !']);
        }
        $idea = Ideas::find($request->id);
        $response = auth()->user()->toggleLike($idea);


        return response()->json(['success' => $response]);
     }
     public function send_mail(request $request) {
         //send mail
         $to_name = $request->idea_author;
         $to_email = $request->idea_email;//send to this email
         // $ftotal = $request->session_cart_id;

         $data = array("name"=>"notification: there is new idea add","body"=>'notification: 1 new idea'); //body of mail.blade.php

         Mail::send('pages.send_mail', $data, function ($message) use ($to_name, $to_email) {
             $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
            $message->from($to_email, $to_name);//send from this mail
         });
         // return redirect('/')->with('message','');
         //--send mail
         return redirect()->back();
     }
}
