<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Analyse;
use App\Model\Classe;
use App\Model\Intersector;
use Redirect;
use DB;

class HistorylistController extends Controller
{	
    public function index() {

        $jobs = DB::table('jobs')
                        ->join('intersectors', 'jobs.id', '=', 'intersectors.job_id')
                        ->join('analyses', 'intersectors.sector_id', '=', 'analyses.sector_id')
                        ->where('analyses.resultprofile' , '=',  '43')
                        ->get();
        
        $classes = Classe::get();

        return view('historylist.index')
              ->with('classes', $classes)
              ->with('jobs', $jobs);
    }
}
