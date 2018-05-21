<?php

namespace App\Http\Controllers;

use App\Model\Classe;
use App\Model\Job;
use Redirect;
use Request;
use Validator;

class ClasseController extends Controller
{
    public function index() {
    
    	$classe = Classe::where('id', $_GET['id'])->first();

    	 $jobs = Job::get();

    	return view('classeupdate.index')->with('classe', $classe)->with('jobs', $jobs);
    }

    public function update() {

    	$values = Request::all();

    	$rules = [
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255',
			'cost' => 'required|integer',
			'cost' => 'required|integer',
			'contact' => 'required|string',
			'city' => 'required|string',
			'address' => 'required|string',
			'cp' => 'required|integer',
			'mail' => 'email|required',
			'tel' => 'required|regex:#^0[1-9][0-9]{8}#',
			'job_id' => 'required|integer',
			'link' => 'required|string',

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
			'link.string' => 'lien invalide',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$classe = Classe::where('id', $_GET['id'])->first();

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
		$classe->link = $_POST['link'];

		$classe->save();

		flash('Formation modifiée')->success();

		return Redirect::back();
    }
}
