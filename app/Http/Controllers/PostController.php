<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

    }

    public function single_post(Request $request){


        return view('frontend.posts.single-post');

    }
}
