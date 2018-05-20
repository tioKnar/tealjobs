<?php

use Illuminate\Database\Seeder;
use App\Model\Classe;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
        		'classes_name' => 'Webforce3',
                'duration' => '3 mois',
        		'description' => 'Devenir développeur en seulement 3 mois',
        		'contact' => 'Lilian Delaportua',
        		'mail' => 'webforce@formation.com',
        		'tel' => '0523659586',
        		'city' => 'Bordeaux',
        		'cp' => '33000',
        		'address' => '13 rue abbé de l\'épée',
        		'cost' => '3200',
                'job_id' => '1',
        	];

        Classe::insert($data);
    }
}
