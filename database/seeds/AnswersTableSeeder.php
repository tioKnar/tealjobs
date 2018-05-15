<?php

use Illuminate\Database\Seeder;
use App\Model\Answer;

class AnswersTableSeeder extends Seeder
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
        		'answer1' => 'bleu',
        		'answer2' => 'rouge',
        		'answer3' => 'vert',
        		'answer4' => 'jaune',
        		'answer5' => 'violet',
        		'answer6' => 'orange',
            ],
            [
        		'answer1' => 'gateaux',
        		'answer2' => 'bonbons',
        		'answer3' => 'fromage',
        		'answer4' => 'chocolat',
        		'answer5' => 'madelaines',
        		'answer6' => 'boudoirs',
            ],
            [
        		'answer1' => 'eau',
        		'answer2' => 'vin',
        		'answer3' => 'biere',
        		'answer4' => 'coca',
        		'answer5' => 'orangina',
        		'answer6' => 'fanta',
            ],
            [
        		'answer1' => 'chat',
        		'answer2' => 'chien',
        		'answer3' => 'oiseau',
        		'answer4' => 'poisson',
        		'answer5' => 'serpent',
        		'answer6' => 'taupe',
            ],
            [
        		'answer1' => 'grand',
        		'answer2' => 'petit',
        		'answer3' => 'tres petit',
        		'answer4' => 'tres grand',
        		'answer5' => 'immense',
        		'answer6' => 'minuscule',
            ],
        	];

        Answer::insert($data);
    }
}
