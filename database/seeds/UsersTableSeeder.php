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
        DB::table('users')->insert([
			'name' => 'Nani Paul',
			'username' => 'nanipaul68@gmail.com',
			'password' => bcrypt('12345678'),
			'group_name' => 'group1',
		]);
		
		DB::table('users')->insert([
			'name' => 'John Doe',
			'username' => 'john@yahoo.com',
			'password' => bcrypt('12345678'),
			'group_name' => 'group2',
		]);
		
		DB::table('users')->insert([
			'name' => 'Favor Oriabure',
			'username' => 'favor@yahoo.com',
			'password' => bcrypt('12345678'), 
			'group_name' => 'group3',
		]);
		
		DB::table('users')->insert([
			'name' => 'Ossie Osita',
			'username' => 'ossie@yahoo.com',
			'password' => bcrypt('12345678'),
			'group_name' => 'group4',
		]);
        
    }
}
