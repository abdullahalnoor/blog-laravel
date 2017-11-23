<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function getSinglePost($slug){
    	$post = Post::where('slug','=',$slug)->first();

    	return view('front.single.single')->withPost($post);
    }
}
