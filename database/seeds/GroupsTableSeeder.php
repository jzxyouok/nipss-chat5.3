<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'group_name' => 'group1',
		]);
		
		DB::table('groups')->insert([
		    'group_name' => 'group2',
		]);
		
		DB::table('groups')->insert([
		    'group_name' => 'group3',
		]);
		
		DB::table('groups')->insert([
		    'group_name' => 'group4',
		]);
		
		DB::table('groups')->insert([
		    'group_name' => 'group5',
		]);
    }
}
