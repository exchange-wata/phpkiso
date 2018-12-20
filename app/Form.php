<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps = false; 
    //timesatampを利用しない
    // protected $table = 'forms';

	protected $fillable = ['name', 'content',];
}
