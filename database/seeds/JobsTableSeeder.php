<?php

use Illuminate\Database\Seeder;
use App\Model\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
        		'name' => 'Développeur',
        		'description' => 'Devenez de véritables hackers',
        		'note' => '6',
        	];

         Job::insert($data);
    }
}
