<?php

namespace App\Http\Controllers;

// use Request;
// use App\Model\Answer;
// use App\Model\Analyse;
// use Redirect;
// use DB;


class ResultsController extends Controller
{
    public function index(){

        // $resultats = DB::table('questions')
        //                 ->join('interanswers', 'questions.id', '=', 'interanswers.question_id')
        //                 ->join('answers', 'interanswers.answer_id', '=', 'answers.id')
        //                 ->get();

        return view('results.index');
        //      ->export();>with('resultats', $resultats);
    }

    
    public function store(){

        $values = Request::all();
    }
}