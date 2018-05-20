<?php

namespace App\Http\Controllers;

use App\Model\Classe;
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
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255',
			'cost' => 'required|integer',
			'contact' => 'required|string',
			'city' => 'required|string',
			'address' => 'required|string',
			'cp' => 'required|integer',
			'mail' => 'email|required',
			'tel' => 'required|regex:#^0[1-9][0-9]{8}#',
			'job_id' => 'required|integer',

		];

		$validator = Validator::make($values, $rules, [
			'mail.email' => 'E-mail invalide',
			'mail.required' => 'Veuillez entrer un email',
			'name.string' =>'Nom invalide',
			'description.string' =>'Description invalide',
			'cost.integer' =>'Coût invalide',
			'contact.string' =>'Contact invalide',
			'city.string' =>'Ville invalide',
			'address.string' =>'Adresse invalide',
			'cp.integer' =>'Code postal invalide',
			'tel.regex' =>'Téléphone invalide',
			'job_id.integer' =>'Métier invalide',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$classe = new Classe();

		$classe->name = $_POST['name'];
		$classe->description = $_POST['description'];
		$classe->cost = $_POST['cost'];
		$classe->contact = $_POST['contact'];
		$classe->city = $_POST['city'];
		$classe->cp = $_POST['cp'];
		$classe->tel = $_POST['tel'];
		$classe->mail = $_POST['mail'];
		$classe->address = $_POST['address'];
		$classe->job_id = $_POST['job_id'];

		$classe->save();

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
