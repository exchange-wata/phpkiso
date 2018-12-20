<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1レコード
		$user = new \App\User([
		// 'dept_id' => '1',
		'name' => '川端 莉緒',
		'email' => 'kawabata_rio@example.com',
		'password' => 'trial'
		]);
		$user->save();

		// 2レコード
		$user = new \App\User([
		// 'dept_id' => '2',
		'name' => '小玉 隆博',
		'email' => 'kodama_takahiro@example.com',
		'password' => 'trial'
		]);
		$user->save();

		// 3レコード
		$user = new \App\User([
		// 'dept_id' => '1',
		'name' => '岩井 圭',
		'email' => 'iwai_kei@example.com',
		'password' => 'trial'
		]);
		$user->save();

		// 4レコード
		$user = new \App\User([
		// 'dept_id' => '1',
		'name' => '岩井 蓮',
		'email' => 'iwai_ren@example.com',
		'password' => 'trial'
		]);
		$user->save();
    }
}
