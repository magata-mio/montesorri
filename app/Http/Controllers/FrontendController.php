<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
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
