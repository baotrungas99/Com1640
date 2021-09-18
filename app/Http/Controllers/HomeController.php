<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;
use App\Models\Ideas;

class HomeController extends Controller
{
    public function index(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        $ideas = Ideas::Paginate(5);
        // dd($category);
        return view('pages.home')->with(compact('category','ideas'));
    }

}
