<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false; //timesatampを利用しない
	protected $fillable = ['name','email'];
}
