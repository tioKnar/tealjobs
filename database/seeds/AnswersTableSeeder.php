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
        		'answer1' => 'd\'ordre, de structure et d\'un cadre',
        		'answer2' => 'de vous sentir aimé.e, d\'être entouré.e',
        		'answer3' => 'd\'un contact ludique et complice avec les personnes vous entourant',
        		'answer4' => 'de solitude et de tranquilité',
        		'answer5' => 'd\'une cause à défendre et en laquelle croire',
        		'answer6' => 'd\'excitation, de challenges',
            ],
            [
        		'answer1' => 'faits : "il est 13h07", "je me suis levé à 6h05"',
        		'answer2' => 'émotions : "je me sens bien", "j\'aime beaucoup cet endroit"',
        		'answer3' => 'réactions : "j\'adore !", "il est nul ce film !"',
        		'answer4' => 'imagination : "j\'imagine que cette personne vit en ville", je vois très bien un loft dans ce viel hangar"',
        		'answer5' => 'opinions : "je crois que nous avons fait le bon choix", "il est important d\'être rigoureux et consciencieux dans son travail"',
        		'answer6' => 'actions : "je vais faire le marathon en 3h!", "je vais me faire toutes les ventes tout seul!"',
            ],
            [
        		'answer1' => 'Suis-je compétent.e ?',
        		'answer2' => 'Suis-je digne d\'intérêt ?',
        		'answer3' => 'Suis-je "acceptable" ?',
        		'answer4' => 'Suis-je "voulu.e" ?',
        		'answer5' => 'Suis-je digne de confiance ?',
        		'answer6' => 'Suis-je vivant.e ?',
            ],
            [
        		'answer1' => 'vous préférez travailler seul ou à deux grand maximum',
        		'answer2' => 'vous êtes à l\'aise, quel que soit le groupe',
        		'answer3' => 'vous pouvez naviguer entre plusieurs groupe sans problème
',
        		'answer4' => 'vous préférez travailler seul',
        		'answer5' => '',
        		'answer6' => '',
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
