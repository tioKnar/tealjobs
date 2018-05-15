<?php

use Illuminate\Database\Seeder;
use App\Model\Question;

class QuestionsTableSeeder extends Seeder
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
        		'question' => 'Quelle couleur es-tu ?',
        		'answer1' => 'Bleu',
        		'answer2' => 'Rouge',
        		'answer3' => 'Rose',
        		'answer4' => 'Jaune',
        		'answer5' => 'Violet',
        		'answer6' => 'teal',
            ],
             [
                'question' => 'Que manges-tu ?',
                'answer1' => 'chocobon',
                'answer2' => 'gateau bonne maman',
                'answer3' => 'Yaourt',
                'answer4' => 'Cookies',
                'answer5' => 'rien',
                'answer6' => 'tout',
            ],
             [
                'question' => 'Que bois-tu ?',
                'answer1' => 'eau',
                'answer2' => 'vin',
                'answer3' => 'bière',
                'answer4' => 'vodka',
                'answer5' => 'mélange',
                'answer6' => 'je bois la vie',
            ],
             [
                'question' => 'Quel animal es-tu ?',
                'answer1' => 'léopart des neiges',
                'answer2' => 'poisson',
                'answer3' => 'dragon',
                'answer4' => 'biche',
                'answer5' => 'taupe',
                'answer6' => 'paresseux',
            ],
             [
                'question' => 'Quel taille fais-tu ?',
                'answer1' => 'petit',
                'answer2' => 'chut',
                'answer3' => 'grand',
                'answer4' => 'comme phillipe',
                'answer5' => 'très grand',
                'answer6' => 'je sais pas',
            ],
        	];

        Question::insert($data);
    }
}
