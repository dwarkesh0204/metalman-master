<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cityData = 
    		array(
				array('name' => 'Mumbai', 'state_id' => '1','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Bangalore', 'state_id' => '1','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Chennai', 'state_id' => '1','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Udaipur', 'state_id' => '3','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Lucknow', 'state_id' => '2','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
				array('name' => 'Ahmedabad' , 'state_id' => '4','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Surat' , 'state_id' => '4','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09'),
                array('name' => 'Rajkot' , 'state_id' => '4','created_at' => '2018-05-17 17:05:09','updated_at' => '2018-05-17 17:05:09')
			);

        City::insert($cityData);
    }
}
