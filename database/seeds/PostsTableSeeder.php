<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
		'user_id' => '1',
		'title' => 'Hi there',
		'body' => 'Hi Japan' 
]);
DB::table('posts')->insert([
		'user_id' => '2',
		'title' => 'Hi here',
		'body' => 'Konnichiwa'
]);
DB::table('posts')->insert([
		'user_id' => '3',
		'title' => 'Hi here',
		'body' => 'Konnichiwa'
]);
DB::table('posts')->insert([
		'user_id' => '2',
		'title' => 'Hi here',
		'body' => 'Konnichiwa'
]);
DB::table('posts')->insert([
		'user_id' => '1',
		'title' => 'Hi here',
		'body' => 'Konnichiwa'
]);
    }
}
