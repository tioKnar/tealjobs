<?php

namespace App\Http\Controllers;

use App\Model\Analyse;
use App\Model\Classe;
use App\Model\Intersector;
use App\Model\Job;
use Auth;
use DB;
use Redirect;
use Request;

class HistorytreeController extends Controller
{	
    public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {

        $jobs = DB::table('jobs')
                        ->join('intersectors', 'jobs.id', '=', 'intersectors.job_id')
                        ->join('analyses', 'intersectors.sector_id', '=', 'analyses.sector_id')
                        ->where('analyses.resultprofile' , '=', Auth::user()->profilpsy )
                        ->groupBy('name')
                        ->take(15)
                        ->get();

        $classes = DB::table('classes')
                        ->join('interclasses', 'classes.id', '=', 'interclasses.classes_id')
                        ->join('jobs', 'jobs.id', '=', 'interclasses.jobs_id')
                        ->orderBy('city')
                        ->get();
                        
        return view('historytree.index')
              ->with('classes', $classes)
              ->with('jobs', $jobs);
    }
}
