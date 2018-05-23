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
                'question' => 'Lorque vous êtes stressé.e, vous avez tendance à :',
            ],
            [
                'question' => 'Comment préférez-vous qu\'on s\'adresse à vous ?',
            ],
             [
                'question' => 'Toute personne a besoin de reconnaissance. Que voulez-vous que les autres reconnaissent chez vous ?',
            ],
             [
                'question' => 'Au sein d\'un groupe, vous avez un travail à rendre dans des délais très courts. Le stress vous gagne. Comment réagissez vous avec les personnes travaillant avec vous ?',
            ],
             [
                'question' => 'Comment vous adressez-vous à autrui ?',
            ],
             [
                'question' => 'En période de stress, comment intéragissez-vous avec les personnes de votre entourage ?',
            ],
            [
                'question' => 'Comment vous définiriez-vous ? Que dit-on de vous ?',
            ],
            [
                'question' => 'Les vacances idéales, pour moi c\'est:',
            ],
            [
                'question' => 'question12',
            ],
            [
                'question' => 'question13',
            ],
            [
                'question' => 'question14',
            ],
            [
                'question' => 'question15',
            ],
        	];

        Question::insert($data);
    }
}
