<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Analyse;
use App\Model\Classe;
use App\Model\Intersector;
use Auth;
use Redirect;
use DB;

class HistorylistController extends Controller
{	
    public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {

        $jobs = DB::table('jobs')
                        ->join('intersectors', 'jobs.id', '=', 'intersectors.job_id')
                        ->join('analyses', 'intersectors.sector_id', '=', 'analyses.sector_id')
                        ->where('analyses.resultprofile' , '=',  Auth::user()->profilpsy)
                        ->groupBy('name')
                        ->get();
        
        $classes = DB::table('classes')
                        ->join('interclasses', 'classes.id', '=', 'interclasses.classes_id')
                        ->join('jobs', 'jobs.id', '=', 'interclasses.jobs_id')
                        ->orderBy('city')
                        ->get();

        return view('historylist.index')
              ->with('classes', $classes)
              ->with('jobs', $jobs);
    }
}
