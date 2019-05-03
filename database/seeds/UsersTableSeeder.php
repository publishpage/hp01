<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('users')->insert([
        	'user_id' => 'admin',
        	'name' => '管理者',
        	'email' => 'admin@mail.com',
        	'password' => bcrypt('admin0000'),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
