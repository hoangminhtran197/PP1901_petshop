<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BillTableSeeder extends Seeder
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
        	DB::table('bills')->insert([
        			'name_detail' => Str::random(20),
        			'user_id' => rand(1, 5),
        			'created_at' => date('Y-m-d H:i:s'),
        			'updated_at' => date('Y-m-d H:i:s'),
        		]);
        }
    }
}
