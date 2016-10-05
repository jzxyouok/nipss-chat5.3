<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
			'name' => 'Nani Paul',
			'username' => 'nanipaul68@gmail.com',
			'password' => bcrypt('12345678'),
		    'group_id' => 1,
		]);
		
		DB::table('participants')->insert([
			'name' => 'John Doe',
			'username' => 'john@yahoo.com',
			'password' => bcrypt('12345678'),
			'group_id' => 2,
		    
		]);
		
		DB::table('participants')->insert([
			'name' => 'Favor Oriabure',
			'username' => 'favor@yahoo.com',
			'password' => bcrypt('12345678'),
			'group_id' => 3,
		    
		]);
		
		DB::table('participants')->insert([
			'name' => 'Ossie Osita',
			'username' => 'ossie@yahoo.com',
			'password' => bcrypt('12345678'),
		    'group_id' => 4,
		]);
    }
}
