<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_ideas;

class HomeController extends Controller
{
    public function index(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();
        // dd($category);
        return view('pages.home')->with(compact('category'));
    }

}
