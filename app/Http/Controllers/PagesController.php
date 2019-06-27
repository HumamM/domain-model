<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Course Info';
    	return view('pages.index')->with('title',$title);
    }
}
