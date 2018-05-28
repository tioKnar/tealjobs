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
                        ->where('analyses.resultprofile' , '=',  $_GET['profile'])
                        ->groupBy('name')
                        ->take(15)
                        ->get();

         $classes = DB::table('classes')
                        ->join('interclasses', 'classes.id', '=', 'interclasses.classes_id')
                        ->join('jobs', 'jobs.id', '=', 'interclasses.jobs_id')
                        ->orderBy('city')
                        ->get();
                        
        return view('results.index')
              ->with('classes', $classes)
              ->with('jobs', $jobs);
    }

}