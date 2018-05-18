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
                      [
                'answer1' => 'bleu 12',
                'answer2' => 'rouge 12',
                'answer3' => 'vert 12',
                'answer4' => 'jaune 12',
                'answer5' => 'violet 12',
                'answer6' => 'orange 12',
            ],
            [
                'answer1' => 'gateaux 12',
                'answer2' => 'bonbons 12',
                'answer3' => 'fromage 12',
                'answer4' => 'chocolat 12',
                'answer5' => 'madelaines 12',
                'answer6' => 'boudoirs 12',
            ],
            [
                'answer1' => 'eau 12',
                'answer2' => 'vin 12',
                'answer3' => 'biere 12',
                'answer4' => 'coca 12',
                'answer5' => 'orangina 12',
                'answer6' => 'fanta 12',
            ],
            [
                'answer1' => 'chat 12',
                'answer2' => 'chien 12',
                'answer3' => 'oiseau 12',
                'answer4' => 'poisson 12',
                'answer5' => 'serpent 12',
                'answer6' => 'taupe 12',
            ],
            [
                'answer1' => 'grand 12',
                'answer2' => 'petit 12',
                'answer3' => 'tres petit 12',
                'answer4' => 'tres grand 12',
                'answer5' => 'immense 12',
                'answer6' => 'minuscule 12',
            ],
        	];

        Answer::insert($data);
    }
}
