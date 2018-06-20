<?php

use Illuminate\Database\Seeder;
use App\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$stateData = 
    		array(
				array('name' => 'Maharashtra','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
				array('name' => 'Punjab','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
				array('name' => 'Rajasthan','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
				array('name' => 'Gujarat','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
				array('name' => 'Arunachal Pradesh','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09')
			);

        State::insert($stateData);
    }
}
