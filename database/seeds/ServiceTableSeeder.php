<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceTableSeeder extends Seeder
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
        	DB::table('services')->insert ([
        		'user_id' => rand(1,5),
        		'phone' => str::random(20),
        		'address' => Str::random(20),
        		'map' => Str::random(20),
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	]);
		}	 	
    }
}
