<?php

namespace App\Http\Controllers;

use App\Model\Classe;
use App\Model\Interclasse;
use App\Model\Job;
use DB;
use Redirect;
use Request;
use Validator;

class ClasseController extends Controller
{	
	public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {
    
    	$classes = DB::table('classes')
    						->join('interclasses', 'classes.id', '=', 'interclasses.classes_id')
    						->join('jobs', 'jobs.id', '=', 'interclasses.jobs_id')
    						->where('classes.id', '=', $_GET['id'])
    						->get();
    						
    	$jobs = Job::get();

    	return view('classeupdate.index')->with('classes', $classes)->with('jobs', $jobs);
    }

    public function update() {

    	$values = Request::all();

    	$rules = [
			'classes_name' => 'required|string|max:255',
			'cost' => 'required|integer',
			'contact' => 'required|string',
			'city' => 'required|string',
			'address' => 'required|string',
			'cp' => 'required|integer',
			'mail' => 'email|required',
			'tel' => 'required|regex:#^0[1-9][0-9]{8}#',
		];

		if(!empty($values['duration'])) {
				
			$rules['duration'] = 'integer'; 
		}

		if(!empty($values['link'])) {
				
			$rules['link'] = 'string'; 
		}

		$validator = Validator::make($values, $rules, [
			'mail.email' => 'E-mail invalide',
			'mail.required' => 'Veuillez entrer un email',
			'classes_name.string' =>'Nom invalide',
			'duration.integer' => 'Durée invalide',
			'cost.integer' =>'Coût invalide',
			'contact.string' =>'Contact invalide',
			'city.string' =>'Ville invalide',
			'address.string' =>'Adresse invalide',
			'cp.integer' =>'Code postal invalide',
			'tel.regex' =>'Téléphone invalide',
			'link.string' => 'lien invalide',
		]);

		if($validator->fails()) {

			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$classe = Classe::where('id', $_GET['id'])->first();

		$classe->classes_name = $values['classes_name'];
		$classe->cost = $values['cost'];
		$classe->contact = $values['contact'];
		$classe->city = $values['city'];
		$classe->cp = $values['cp'];
		$classe->tel = $values['tel'];
		$classe->mail = $values['mail'];
		$classe->address = $values['address'];

		if(!empty($values['duration'])) {
				
			$classe->duration = $values['duration']; 
		}

		if(!empty($values['link'])) {
				
			$classe->link = $values['link'];
		}

		$classe->save();

		flash('Formation modifiée')->success();

		return Redirect::back();
    }
}
