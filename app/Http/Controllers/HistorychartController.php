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

    	$lava = new Lavacharts;

    	$reasons = \Lava::DataTable();

        $reasons ->addStringColumn('Profil')
               ->addNumberColumn('Points')
               ->addStringColumn('Color');


		$reasons->addRows([
		    ['Travaillomane',  $user['travaillomane'], 'green'],
		    ['Empathique',     $user['empathique'],    'orange'],
		    ['Rebelle',        $user['rebelle'],       'red'],
		    ['Rêveur',         $user['rêveur'],        'blue'],
		    ['Persévérant',    $user['persévérant'],   'orange'],
		    ['Promoteur',      $user['promoteur'],     'red']
		]);

		$donutchart = \Lava::DonutChart('IMBD', $reasons, [
				'title' => 'Votre profil'
	        ]);

    	return view('historychart.index')->with('lava', $lava);
    }
}
