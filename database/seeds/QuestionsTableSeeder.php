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
            ],
             [
                'question' => 'Que manges-tu ?',
            ],
             [
                'question' => 'Que bois-tu ?',
            ],
             [
                'question' => 'Quel animal es-tu ?',
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
