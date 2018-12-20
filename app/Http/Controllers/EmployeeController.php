<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function select(){
	  $employees = \App\Employee::all();
	  return view('list')->with('employees',$employees);
	}
}
