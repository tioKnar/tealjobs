<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Analyse;
use App\Model\Answer;
use App\Model\Classe;
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
                        ->where('analyses.resultprofile' , '=',  '26')
                        ->groupBy('name')
                        ->take(15)
                        ->get();

         $classes = Classe::get();
                        
        return view('results.index')
              ->with('classes', $classes)
              ->with('results', $jobs);
    }

}