<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Interanswer;
use Redirect;
use DB;


class TestController extends Controller
{
    public function index(){

        $resultats = DB::table('questions')
                        ->join('interanswers', 'questions.id', '=', 'interanswers.question_id')
                        ->join('answers', 'interanswers.answer_id', '=', 'answers.id')
                        ->get();
        // dd($resultats);


        return view('test.index')->with('resultats', $resultats);
    }

    
    public function store(){
        $values = Request::all();


    }

}


