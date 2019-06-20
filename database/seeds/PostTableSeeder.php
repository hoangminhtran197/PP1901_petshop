<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <20; $i++) {
        	DB::table('posts')->insert ([
        			'user_id' => rand(1,5),
        			'product_id' => Str::random(20),
        			'detail_id' => Str::random(20),
        			'title'  => Str::random(20),
        			'content'  => Str::random(20),
        			'created_at' => date('Y-m-d H:i:s'),
        			'updated_at' => date('Y-m-d H:i:s'),
        		]);
        }
    }
}
