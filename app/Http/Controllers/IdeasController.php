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
        
    }
}
