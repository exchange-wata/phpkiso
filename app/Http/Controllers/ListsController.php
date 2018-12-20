<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listsController extends Controller
{
 //    public function select(){
	//   $lists = \App\Survey::all();
	//   return view('list')->with('lists',$lists);
	// }

	public function select(){
		$name = Request::input('name');
		$content = Request::input('content');
	}
}
