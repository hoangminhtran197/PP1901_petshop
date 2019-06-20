<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DetailTableSeeder extends Seeder
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
        	DB::table('details')->insert([
        		'user_id' => rand(1,5),
        		'name' => Str::random(20),
        		'birthday' => date('Y-m-d H:i:s'),
        		'weight' => rand(1,5),
        		'color' => Str::random(20),
        		'image' => Str::random(20),
        		'price' => rand(1,5),
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
      
        		]);
        }
    }
}