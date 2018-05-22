<?php

namespace App\Http\Controllers;
use Auth;
use Khill\Lavacharts\Lavacharts;
use App\Model\User;
use Illuminate\Http\Request;

class HistorychartController extends Controller
{
    public function index() {

    	$user = Auth::user();

    	$chart = \Lava::DataTable();

        $chart ->addStringColumn('Profil')
               ->addNumberColumn('Points')
               ->addStringColumn('Color');


		$chart->addRows([
		    ['Travaillomane',  $user['travaillomane'], 'green'],
		    ['Empathique',     $user['empathique'],    'orange'],
		    ['Rebelle',        $user['rebelle'],       'red'],
		    ['Rêveur',         $user['rêveur'],        'blue'],
		    ['Persévérant',    $user['persévérant'],   'orange'],
		    ['Promoteur',      $user['promoteur'],     'red']
		]);

		\Lava::ColumnChart('Votre profil', $chart,
			[
            	'title' => 'Votre profil',
            	'titleTextStyle' => [
					                'color'    => '#212529',
					                'fontSize' => 14
							        ]
	        ]);

    	return view('historychart.index', compact('lava'));
    }
}
