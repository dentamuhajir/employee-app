<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 12; $i++){
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('employees')->insert([
                'nik' => "EMP-".$i,
    			'name' => $faker->name,
    			'address' => $faker->address,
    			'date_of_birth' => $faker->dateTimeBetween('1990-01-01', '2002-12-31'),
                'join_date' => $faker->dateTimeBetween('2016-01-01', date("Y/m/d"))//->format('d/m/Y')
    		]);
    	}
    }
}
