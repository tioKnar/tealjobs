<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Analyse;
use App\Model\Answer;
use App\Model\Intersector;
use App\Model\Job;
use Redirect;
use DB;


class ResultsController extends Controller
{
    public function index(){

         $jobs = DB::table('jobs')
                         ->join('intersectors', 'jobs.id', '=', 'intersectors.job_id')
                         ->join('analyses', 'intersectors.sector_id', '=', 'analyses.sector_id')
                         ->where('analyses.resultprofile' , '=',  '43')
                         ->get();
        
         $randomize = $jobs->random(3)
                           ->values();

        return view('results.index')
              ->with('results', $randomize);
    }

    
    public function store(){

        $values = Request::all();
    }
}