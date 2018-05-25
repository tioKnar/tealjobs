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
                'question' => 'Au sein d\'un groupe, vous avez un travail à rendre dans des délais bien trop courts.',
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
                'question' => 'Vous sortez du ciné, le film est un des pires jamais réalisés :',
            ],
            [
                'question' => 'Comment se passe une recherche de job, pour vous ?',
            ],
            [
                'question' => 'En cours, quel genre d\'élève êtes-vous ?',
            ],
            [
                'question' => 'Quel est votre rapport à l\'argent ?',
            ],
            [
                'question' => 'Quand vous avez du temps libre que faites-vous ?',
            ],
            [
                'question' => 'Choisissez un personnage célèbre :',
            ],
            [
                'question' => 'Si j\'étais PDG :',
            ],
            [
                'question' => 'Pour résoudre le problème du réchauffement climatique :',
            ],
            [
                'question' => 'Comment demandez-vous l\'heure à vos collègues ?',
            ],
        ];

        Question::insert($data);
    }
}
