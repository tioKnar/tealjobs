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
            [
        		'classes_name' => 'Webforce3',
                'duration' => '3',
        		'description' => 'Devenir développeur en seulement 3 mois',
        		'contact' => 'Lilian Delaportua',
        		'mail' => 'webforce@formation.com',
        		'tel' => '0523659586',
        		'city' => 'Bordeaux',
        		'cp' => '33000',
        		'address' => '13 rue abbé de l\'épée',
        		'cost' => '3200',
                'job_id' => '1',
            ],
            [
                'classes_name' => 'Wild Code School',
                'duration' => '5',
                'description' => 'Devenir développeur en chaussettes',
                'contact' => 'Phillipe Poutou',
                'mail' => 'wild@formation.com',
                'tel' => '0565956585',
                'city' => 'Bordeaux',
                'cp' => '33000',
                'address' => 'saint Pierre',
                'cost' => '6000',
                'job_id' => '1',
            ],
            [
                'classes_name' => 'Drag School',
                'duration' => '16',
                'description' => 'Devenir Drag Queen en seulement 16 mois',
                'contact' => 'Dodo l\'asticot',
                'mail' => 'Drag@formation.com',
                'tel' => '0523568954',
                'city' => 'Bordeaux',
                'cp' => '33000',
                'address' => '1 rue de jojo',
                'cost' => '15000',
                'job_id' => '2',
            ],
            [
                'classes_name' => 'Pompom school',
                'duration' => '24',
                'description' => 'Devenir pompier en seulement 2 ans',
                'contact' => 'jeje jojo',
                'mail' => 'pompier@formation.com',
                'tel' => '0521122112',
                'city' => 'Bordeaux',
                'cp' => '33000',
                'address' => 'Rue de l\'echelle',
                'cost' => '12',
                'job_id' => '3',
            ],

        ];

        Classe::insert($data);
    }
}
