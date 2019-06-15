<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function INDEX(){
    	return view('/form');
    }
}
