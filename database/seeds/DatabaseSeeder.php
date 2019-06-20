<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BillTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(DetailTableSeeder::class);
        $this->call(PostTableSeeder::class);
		$this->call(ProductTableSeeder::class);
		$this->call(ServiceTableSeeder::class);
    }
}
