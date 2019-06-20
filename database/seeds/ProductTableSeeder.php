<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 20; $i++) {
        	DB::table('products')->insert([
        			'user_id' => rand(1,5),
        			'name' => Str::random(20),
        			'detail_id' => Str::random(20),
        			'introduce' => Str::random(20),
        			'origin' => Str::random(20),
        			'classify' => Str::random(20),
        			'characteristic' => Str::random(20),
        			'created_at' => date('Y-m-d H:i:s'),
        			'updated_at' => date('Y-m-d H:i:s'),
        	]);
        }	
 
    }
}
