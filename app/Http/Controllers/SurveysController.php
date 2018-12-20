<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Survey;

class SurveysController extends Controller
{
    public function survey()
    {
        return view('survey');
    }

    public function store() {
    	$lists = \Request::all();
        return view('list', compact('lists'));
    }
}
