<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Redirect;
use Request;
use Validator;

class JobsController extends Controller
{

	public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {

    	$jobs = Job::paginate(4);

    	return view('jobs.index')->with('jobs', $jobs);
    }

    public function store() {

    	$values = Request::all();

    	$rules = [
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255',
			'note' => 'integer|required',
		];

		$validator = Validator::make($values, $rules, [
			'name.required' => 'Veuillez entrer un nom',
			'name.string' => 'Nom invalide',
			'description.string' =>'Description invalide',
			'description.required' =>'Veuillez entrer une description',
			'note.integer' =>'Note invalide',
			'note.required' =>'Veuillez entrer une note',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$job = new Job();

		$job->name = $values['name'];
		$job->description = $values['description'];
		$job->note = $values['note'];

		$job->save();

		flash('Métier ajouté')->success();

		return Redirect::back();
    }

     public function delete() {
     		
	     	$id = $_GET['id'];

	    	$job = Job::where('id', $id)->first();
	    		
	    	$job->delete();

	 		return Redirect::back();
    }
}
