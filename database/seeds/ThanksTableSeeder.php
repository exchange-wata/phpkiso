<?php

use Illuminate\Database\Seeder;

class ThanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1レコード
        $thank = new \App\Thanks([
        	'nickname' => 'Tokiya',
        	'email' => 'tokiya@shining.com',
        	'contents' => '一ノ瀬トキヤです。' 
        ]);
        $thank ->save();
    }
}
