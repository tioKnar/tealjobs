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
        		'question' => 'De quoi avez-vous besoin pour avancer ?',
            ],
             [
                'question' => 'Vous vous levez avec 10mn de retard :',
            ],
             [
                'question' => 'La question qui vous revient tout le temps en tête :',
            ],
             [
                'question' => 'Un travail de groupe idéal, c\'est :',
            ],
             [
                'question' => 'Vous êtes très stressé.e. Vous :',
            ],
            [
                'question' => 'La meilleure façon de vous demander un service ?',
            ],
             [
                'question' => 'Vous êtes particulièrement connu.e pour :',
            ],
             [
                'question' => 'Au sein d\'un groupe, vous avez un travail à rendre dans des délais bien trop courts. Vous :',
            ],
             [
                'question' => 'Vous revoyez un.e ex pour une explication polie :',
            ],
             [
                'question' => 'Rien ne va, aujourd\'hui. Rien. Vous :',
            ],
            [
                'question' => 'Question classique. On dit que vous êtes plutôt :',
            ],
            [
                'question' => 'Vous sortez du ciné, le film est un des pires jamais faits :',
            ],
            [
                'question' => 'Comment se passe une recherche de job, pour vous ?',
            ],
            [
                'question' => 'En cours, quel genre d\'élève êtes vous ?',
            ],
            [
                'question' => 'Quel est votre rapport avec l\'argent ?',
            ],
            [
                'question' => 'question15',
            ],
        ];

        Question::insert($data);
    }
}
