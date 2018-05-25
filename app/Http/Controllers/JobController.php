<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Redirect;
use Request;
use Validator;

class JobController extends Controller
{	
	public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {
    
    	$job = Job::where('id', $_GET['id'])->first();

    	return view('jobupdate.index')->with('job', $job);
    }

      public function update() {

    	$values = Request::all();

    	$rules = [
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255',
		];

		$validator = Validator::make($values, $rules, [
			'name.required' => 'Veuillez entrer un nom',
			'name.string' => 'Nom invalide',
			'description.string' =>'Description invalide',
			'description.required' =>'Veuillez entrer une description',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$job = Job::where('id', $_GET['id'])->first();

		$job->name = $values['name'];
		$job->description = $values['description'];

		$job->save();

		flash('Métier modifié')->success();

		return Redirect::back();
	}
}
