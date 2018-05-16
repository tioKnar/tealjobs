<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Interanswer;


class TestController extends Controller
{
    public function index(){

    	// $allQuestions = Question::all();
    	// $totalQuestions = $allQuestions->count();

    	// $item = 1;

    	$question1 = Question::find(1);
    	
    	$reponses1 = Answer::all()->where('id', '=', 1);

    	$question2 = Question::find(2);

    	$reponses2 = Answer::all()->where('id', '=', 2);

    	$question3 = Question::find(3);
    	
    	$reponses3 = Answer::all()->where('id', '=', 3);

    	$question4 = Question::find(4);

    	$reponses4 = Answer::all()->where('id', '=', 4);

    	$question5 = Question::find(5);
    	
    	$reponses5 = Answer::all()->where('id', '=', 5);

    	$question6 = Question::find(6);

    	$reponses6 = Answer::all()->where('id', '=', 6);

    	// dd($question);

    	// $questions = Question::all();

    	// $reponses = Answer::all();

    	return view('test.index')->with('question1', $question1)
    							 ->with('question2', $question2)
    							 ->with('question3', $question3)
    							 ->with('question4', $question4)
    							 ->with('question5', $question5)
    							 ->with('question6', $question6)
    							 ->with('reponses1', $reponses1)
    							 ->with('reponses2', $reponses2)
    							 ->with('reponses3', $reponses3)
    							 ->with('reponses4', $reponses4)
    							 ->with('reponses5', $reponses5)
    							 ->with('reponses6', $reponses6);
    							 // ->with('item', $item)
    							 // ->with('totalQuestions', $totalQuestions);
    }
}
