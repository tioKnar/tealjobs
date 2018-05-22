<?php

namespace App\Http\Controllers;

use App\Model\Classe;
use App\Model\Interclasse;
use App\Model\Job;
use Redirect;
use Request;
use Validator;

class ClassesController extends Controller
{
	public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

    	 $classes = Classe::paginate(4);

    	 $jobs = Job::get();

    	return view('classes.index')->with('classes', $classes)->with('jobs', $jobs);
    }

    public function store() {
	
    	$values = Request::all();

    	$rules = [
			'classes_name' => 'required|string|max:255',
			'duration' => 'required|integer',
			'cost' => 'required|integer',
			'contact' => 'required|string',
			'city' => 'required|string',
			'address' => 'required|string',
			'cp' => 'required|integer',
			'mail' => 'email|required',
			'tel' => 'required|regex:#^0[1-9][0-9]{8}#',
			'link' => 'required|string',
			'job_id' => 'required|array',

		];

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

		$classe->classes_name = $_POST['classes_name'];
		$classe->duration = $_POST['duration'];
		$classe->cost = $_POST['cost'];
		$classe->contact = $_POST['contact'];
		$classe->city = $_POST['city'];
		$classe->cp = $_POST['cp'];
		$classe->tel = $_POST['tel'];
		$classe->mail = $_POST['mail'];
		$classe->address = $_POST['address'];
		$classe->link = $_POST['link'];

		$classe->save();

		$lastclasse = Classe::get()->last();

		foreach($_POST['job_id'] as $value) {

			$interclasse = new Interclasse;
			$interclasse->jobs_id = $value;
			$interclasse->classes_id = $lastclasse->id;
			$interclasse->save();
		};



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
