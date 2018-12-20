<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankController extends Controller
{
    public function thanks(){
    	$thank = \App\Thanks::all();
    	return view('thank')->with('thanks', $thank);
    }
}
