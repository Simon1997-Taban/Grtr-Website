<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request){

       $path = explode('/',url()->current());

       $page_name = end($path);

       return view()->first(["frontend.{$page_name}"]);

    }
}
