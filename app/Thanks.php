<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanks extends Model
{
    public $timestamps = false; //timesatampを利用しない
	protected $fillable = ['nickname', 'email', 'contents',];
}
