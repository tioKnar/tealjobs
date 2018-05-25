<?php

namespace App\Http\Controllers;

use App\Model\Classe;
use App\Model\Job;
use App\Model\Sector;
use App\Model\Intersector;
use App\Model\Interclasse;
use Redirect;
use Request;
use Validator;
use DB;

class JobsController extends Controller
{

	public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {

    	$jobs = Job::paginate(4);

    	$sectors = DB::table('sectors')
    					->orderBy('name')
    					->get();

    	$classes = DB::table('classes')
    					->orderBy('classes_name')
    					->get();

    	return view('jobs.index')->with('jobs', $jobs)->with('sectors', $sectors)->with('classes', $classes);
    }

    public function store() {

    	$values = Request::all();

    	$rules = [
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255',
			'sector_id' => 'array',
			'classes_id' => 'array'
		];

		$validator = Validator::make($values, $rules, [
			'name.required' => 'Veuillez entrer un nom',
			'name.string' => 'Nom invalide',
			'description.string' =>'Description invalide',
			'description.required' =>'Veuillez entrer une description',
			'sector_id.array' =>'Secteur invalide',
			'classes_id.array' =>'Formation invalide',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$job = new Job();

		$job->name = $values['name'];
		$job->description = $values['description'];

		$job->save();

		$lastjob = Job::get()->last();

		foreach($values['sector_id'] as $value) {

				$interintersector = new Intersector;
				$interintersector->sector_id = $value;
				$interintersector->job_id = $lastjob->id;
				$interintersector->save();
		};


		if(!empty($values['classes_id'])) {

			foreach($values['classes_id'] as $value) {

				$interclasses = new Interclasse;
				$interclasses->classes_id = $value;
				$interclasses->jobs_id = $lastjob->id;
				$interclasses->save();
			};
		}

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
