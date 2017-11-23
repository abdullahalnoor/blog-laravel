<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{
    public function index(){

    		$posts = Post::orderBy('created_at','desc')->limit(5)->get();

    	return view('front.home.home-content')->with('posts',$posts);
    }
    public function about(){
    	return view('front.about.about-content');
    }
    public function contact(){
    	return view('front.contact.contact-form');
    }
}
