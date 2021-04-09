<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $team = Team::all();
        return view('frontend.pages.index',compact('team'));
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function course(){
        return view('frontend.pages.course');
    }
    public function about(){
        $title = 'about';
        return view('frontend.pages.about',compact('title'));
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
}
