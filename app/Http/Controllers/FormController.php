<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form; //Formモデルを呼び出す

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }

    // public function create(Request $request)
    // {
    // 	$param = [
    // 		'name' => $request->name,
    // 		'content' => $request->content,
    // 	];
    // 	$items = DB::insert('insert into forms (name, content) value (:name, :content)');
    // 	return redirect('form');
    // }

    public function store() {
        $inputs = \Request::all();
 
        // dd($inputs); 削除
 
        // ① マスアサインメントを使って、記事をDBに作成
        Form::create($inputs);
 
        // ② 記事一覧へリダイレクト
        return redirect('form/');
    }
}
