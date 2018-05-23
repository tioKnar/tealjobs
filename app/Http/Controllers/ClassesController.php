<?php

namespace App\Http\Controllers;

use App\Model\Classe;
use App\Model\Interclasse;
use App\Model\Job;
use Redirect;
use Request;
use Validator;
use DB;

class ClassesController extends Controller
{
	public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

    	 $classes = Classe::paginate(4);

    	 $jobs = DB::table('jobs')
    	 				->orderBy('name')
    	 				->get();

    	return view('classes.index')->with('classes', $classes)->with('jobs', $jobs);
    }

    public function store() {
	
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
			'job_id' => 'array',
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
			'job_id.array' =>'Métier invalide',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$classe = new Classe();

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

		$lastclasse = Classe::get()->last();

		if(!empty($value['job_id'])) {

			foreach($values['job_id'] as $value) {

				$interclasse = new Interclasse;
				$interclasse->jobs_id = $value;
				$interclasse->classes_id = $lastclasse->id;
				$interclasse->save();
			};

		}

		flash('Formation ajoutée')->success();

		return Redirect::back();
    }

    public function delete() {
     		
	     	$id = $_GET['id'];

	    	$classe = Classe::where('id', $id)->first();
	    		
	    	$classe->delete();

	 		return Redirect::back();
    }
}
