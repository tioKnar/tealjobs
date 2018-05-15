<?php

use Illuminate\Database\Seeder;
use App\Model\Profile;

class ProfilesTableSeeder extends Seeder
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
        		'name' => 'Travaillomane',
        		'description' => 'Logique, organisé et responsable',
        	],
        	[
        		'name' => 'Empathique',
        		'description' => 'Chaleureux, sensible et compatissant',
        	],
        	[
        		'name' => 'Rebelle',
        		'description' => 'Créatif, ludique et spontané',
        	],
        	[
        		'name' => 'Rêveur',
        		'description' => 'Calme, imaginatif et réfléchi',
        	],
        	[
        		'name' => 'Persévérant',
        		'description' => 'Engagé, observateur et consciencieux',
        	],
        	[
        		'name' => 'Promoteur',
        		'description' => 'Adaptable, charmeur et plein de ressources',
        	]
        ];

         Profile::insert($data);
    }
}
