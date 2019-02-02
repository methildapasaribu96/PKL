<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
		$this->call(BulanSeeder::class);
		$this->call(DataSeeder::class);
		$this->call(UsersSeeder::class);
    }
}
