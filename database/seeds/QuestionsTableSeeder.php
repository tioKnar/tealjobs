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
        		'question' => 'Quelle couleur es-tu ?',
        		'answer1' => 'Bleu',
        		'answer2' => 'Rouge',
        		'answer3' => 'Rose',
        		'answer4' => 'Jaune',
        		'answer5' => 'Violet',
        		'answer6' => 'teal',
        	];

        Question::insert($data);
    }
}
