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
        		'question' => 'De quoi pensez-vous avoir besoin au quotidien ?',
            ],
             [
                'question' => 'Par quel biais vous exprimez-vous au quotidien ?',
            ],
             [
                'question' => 'Quelle question met en lumière le plus évidemment vos doutes et vos incertitudes ?',
            ],
             [
                'question' => 'Comment vous positionnez-vous face au travail de groupe ?',
            ],
             [
                'question' => 'Quel taille fais-tu ?',
            ],
            [
                'question' => 'Quelle couleur es-tu 12 ?',
            ],
             [
                'question' => 'Que manges-tu 12 ?',
            ],
             [
                'question' => 'Que bois-tu 12 ?',
            ],
             [
                'question' => 'Quel animal es-tu 12 ?',
            ],
             [
                'question' => 'Quel taille fais-tu 12 ?',
            ],
        	];

        Question::insert($data);
    }
}
