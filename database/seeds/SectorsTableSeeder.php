<?php

use Illuminate\Database\Seeder;
use App\Model\Sector;

class SectorsTableSeeder extends Seeder
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
        		'name' => 'Aimer bouger',
        	],
        	[
        		'name' => 'Aimer dessiner',
        	],
        	[
        		'name' => 'Aimer la mode',
        	],
        	[
        		'name' => 'Aimer la nature',
        	],
        	[
        		'name' => 'Aimer les langues',
        	],
        	[
        		'name' => 'Aimer le commerce',
        	],
        	[
        		'name' => 'Aimer le sport',
        	],
        	[
        		'name' => 'Aimer les sensations fortes',
        	],
        	[
        		'name' => 'Aimer communiquer',
        	],
        	[
        		'name' => 'Avoir le sens du contact',
        	],
        	[
        		'name' => 'Consuire, piloter',
        	],
        	[
        		'name' => 'Etre accro au multimédia',
        	],
        	[
        		'name' => 'Etre aux commandes',
        	],
        	[
        		'name' => 'Etre branché.e nouvelles technologies',
        	],
        	[
        		'name' => 'Etre utile aux autres',
        	],
        	[
        		'name' => 'Faire des expériences',
        	],
        	[
        		'name' => 'Faire respecter la loi',
        	],
        	[
        		'name' => 'Jongler avec des chiffres',
        	],
        	[
        		'name' => 'Protéger la planète',
        	],
        	[
        		'name' => 'Réparer, bricoler',
        	],
        	[
        		'name' => 'S\'occuper d\'animaux',
        	],
        	[
        		'name' => 'S\'occuper d\'enfants',
        	],
        	[
        		'name' => 'Soigner',
        	],
        	[
        		'name' => 'Travailler dans le bâtiment',
        	],
        	[
        		'name' => 'Travailler dans le spectacle',
        	],
        	[
        		'name' => 'Travailler dans l\'audiovisuel',
        	],
        	[
        		'name' => 'Travailler de ses mains',
        	],
        ];

         Sector::insert($data);
    }
}
