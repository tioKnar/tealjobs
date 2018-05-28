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
        		'answer1' => 'D\'ordre et de structure.',
        		'answer2' => 'De vous sentir aimé.e et considéré.e.',
        		'answer3' => 'De complicité avec votre entourage.',
        		'answer4' => 'De solitude et de tranquilité.',
        		'answer5' => 'D\'une cause en laquelle croire.',
        		'answer6' => 'D\'excitation, de challenges.',
            ],
            [
        		'answer1' => '"6h10 au lieu de 6h00. Bien joué..."',
        		'answer2' => '"Beau soleil ce matin."',
        		'answer3' => '"Je. suis. EN RETARD !"',
        		'answer4' => '"Chemise bleue ou rouge aujourd\'hui ?"',
        		'answer5' => '"Tant pis, pas de petit dej cette fois-ci."',
        		'answer6' => '"Go! C\'est pas ce qui m\'empêchera de vendre."',
            ],
            [
        		'answer1' => 'Suis-je assez compétent.e ?',
        		'answer2' => 'Suis-je intéressant.e ?',
        		'answer3' => 'Suis-je drôle ?',
        		'answer4' => 'Suis-je "désiré.e" ?',
        		'answer5' => 'Suis-je digne de confiance ?',
        		'answer6' => 'Suis-je assez actif.ve ?',
            ],
            [
        		'answer1' => 'À deux ou trois grand maximum.',
        		'answer2' => 'Peu importe, vous y serez à l\'aise.',
        		'answer3' => 'Vous pouvez naviguer entre plusieurs groupes.',
        		'answer4' => '"Un groupe ?!"',
        		'answer5' => 'Une synergie entre deux personnes.',
        		'answer6' => 'L\'essentiel, c\'est le résultat !',
            ],
            [
        		'answer1' => 'Restez concentré sur l\'essentiel.',
        		'answer2' => 'Perdez pied et faites des bourdes.',
        		'answer3' => 'Râlez et tournez en rond.',
        		'answer4' => 'Vous laissez complètement distraire.',
        		'answer5' => 'Vous focalisez sur le négatif.',
        		'answer6' => 'Foncez. Ҫa fait partie du jeu.',
            ],
                      [
                'answer1' => 'Efficacement, une question pour une réponse.',
                'answer2' => 'Prendre de mes nouvelles avant n\'est pas un luxe.',
                'answer3' => 'Très simplement, tout passe avec gentillesse.',
                'answer4' => 'Très clairement, pour être sûr.e de bien comprendre.',
                'answer5' => 'J\'ai peu de temps, donc vite et bien. Merci.',
                'answer6' => 'Je passe sur la forme, mais un service en vaudra un autre.',
            ],
            [
                'answer1' => 'Votre travail, vous construisez quelque chose de bien.',
                'answer2' => 'Votre empathie, vous comprenez votre entourage.',
                'answer3' => 'Vos rapports fluides avec ...tout le monde, en fait.',
                'answer4' => 'Votre besoin de tranquilité.',
                'answer5' => 'Vos opinions tranchés, pour garder la tête froide.',
                'answer6' => 'Votre capacité à rebondir.',
            ],
            [
                'answer1' => 'Vous devenez agressif car on ne se cale pas sur votre rythme.',
                'answer2' => 'Vous vous pliez en quatre pour ménager votre équipe.',
                'answer3' => 'Vous faites preuve de mauvaise foi.',
                'answer4' => 'Vous vous effacez et attendez que l\'orage passe.',
                'answer5' => 'Vous imposez votre point de vue, en bon moralisateur.',
                'answer6' => 'Vous foncez dans le tas, quitte à faire cavalier seul.',
            ],
            [
                'answer1' => 'Je récupère ma brosse à dents et je décolle.',
                'answer2' => 'Il/Elle aura bien 10 minutes pour donner des nouvelles.',
                'answer3' => 'Ce sera sans filtre : je ne mens jamais.',
                'answer4' => '"On ne peut pas faire ça par sms ?!"',
                'answer5' => 'Il/Elle va voir ce qu\'il/elle rate.',
                'answer6' => 'Perdu pour perdu, je n\'aurai pas à le/la ménager...',
            ],
            [
                'answer1' => 'Gardez le contrôle à tout prix !',
                'answer2' => 'Vous posez en martyr.e.',
                'answer3' => 'Blâmez les autres mais leur laissez le poids des décisions.',
                'answer4' => 'Vous repliez sur vous-même, ça passera peut-être.',
                'answer5' => 'Critiquez les autres.',
                'answer6' => 'Vous focalisez sur vous-même et laissez les autres se débrouiller.',
            ],
            [
                'answer1' => 'Logique, organisé.e, responsable.',
                'answer2' => 'Chaleureux.se, sensible, compatissant.e.',
                'answer3' => 'Créatif.ve, ludique, spontané.e.',
                'answer4' => 'Calme, imaginatif.ve, réfléchi.e.',
                'answer5' => 'Engagé.e, observateur.trice, consciencieux.se.',
                'answer6' => 'Adaptable, charmeur.se, plein.e de ressources.',
            ],
            [
                'answer1' => 'Une perte de temps, une fois de plus.',
                'answer2' => 'J\'espère que la suite sera mieux.',
                'answer3' => 'Donnez-moi une caméra, que j\'arrange ça !',
                'answer4' => 'On passe à autre chose. On va manger ?',
                'answer5' => 'Il y avait quand même une scène sympa.',
                'answer6' => 'Vous étiez de toute façon sur votre téléphone.',
            ],
            [
                'answer1' => 'Vous créez la lettre de motivation ultime.',
                'answer2' => 'Vous ne négociez même pas un salaire.',
                'answer3' => 'Vous cherchez l\'employeur qui vous comprendra.',
                'answer4' => 'Vous ferez sûrement un tas de concessions.',
                'answer5' => 'Jour et nuit s\'il le faut, mais ce job sera vôtre.',
                'answer6' => 'Je fais marcher mon réseau.',
            ],
            [
                'answer1' => 'Je suis aussi méthodique que studieux.',
                'answer2' => 'Je peux craquer à la première mauvaise note.',
                'answer3' => 'Je ne sais pas trop, je m\'y rends rarement.',
                'answer4' => 'J\'ai franchement du mal à écouter.',
                'answer5' => 'Je ferai ce qu\'il faut pour être dans les meilleurs.',
                'answer6' => 'Disons que les anti-sèches m\'aident bien.',
            ],
            [
                'answer1' => 'Je bosse dur pour le gagner !',
                'answer2' => 'J\'évite d\'en parler.',
                'answer3' => 'Je le dépense sans trop faire attention.',
                'answer4' => 'Ça va, ça vient. Ce n\'est pas le principal.',
                'answer5' => 'On n\'en a jamais trop !',
                'answer6' => 'Money is life !',
            ],
            [
                'answer1' => 'Une veille professionnelle, c\'est ce qui fait la différence.',
                'answer2' => 'J\'aime faire du bénévolat et m\'occuper des autres',
                'answer3' => 'Je sors avec des amis dès que j\'ai du temps.',
                'answer4' => 'Un thé et un bouquin, pour me détendre.',
                'answer5' => 'C\'est prévu, café en famille et chorale le dimanche.',
                'answer6' => 'J\'ai très peu de temps libre entre le boulot et ma famille !',
            ],
            [
                'answer1' => 'Margareth Tatcher.',
                'answer2' => 'Gandhi.',
                'answer3' => 'Lady Gaga.',
                'answer4' => 'Leonard De Vinci.',
                'answer5' => 'Martin Luther King.',
                'answer6' => 'Zinédine Zidane.',
            ],
            [
                'answer1' => 'Je serais totalement à ma place.',
                'answer2' => 'Je serais soucieux du bien-être de mes employés.',
                'answer3' => 'Je me déplacerais en hélico.',
                'answer4' => 'Je serais malheureux.',
                'answer5' => 'Je réspecterais le dialogue social.',
                'answer6' => 'Ce serait un super challenge à relever.',
            ],
            [
                'answer1' => 'Je réunis les dirigeants du monde et les oblige à travailler de concert.',
                'answer2' => 'J\'aide les pays en voie de développement à passer aux énergies renouvellables.',
                'answer3' => 'Je me tourne vers la conquête spaciale : il y a de l\'eau sur Mars.',
                'answer4' => 'J\'invente une source d\'énergie gratuite, illimitée et écologique.',
                'answer5' => 'J\'oblige les entreprises les plus polluantes à payer de lourdes amendes.',
                'answer6' => 'Le seul problème là-dedans, c\'est cette théorie complotiste.',
            ],
            [
                'answer1' => '"Peux-tu me donner l\'heure, s\'il-te-plaît ?"',
                'answer2' => '"Sans vouloir te déranger, tu pourrais me donner l\'heure, s\'il-te-plaît ?"',
                'answer3' => '"J\'adore ta monte ! Tu me donnerais l\'heure ?"',
                'answer4' => '"Je ne suis pas à une demi-heure près."',
                'answer5' => '"J\'ai toujours l\'heure sur moi..."',
                'answer6' => '"Donne-moi l\'heure stp !"',
            ],
        ];

        Answer::insert($data);
    }
}
