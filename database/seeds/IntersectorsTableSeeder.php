<?php

use Illuminate\Database\Seeder;
use App\Model\Intersector;

class IntersectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
        		'sector_id' => '2',
        		'job_id' => '3',
        	];

        Intersector::insert($data);
    }
}
