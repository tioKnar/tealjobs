<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Interanswer;


class TestController extends Controller
{
    public function index(){

    	$allQuestions = Question::all();
    	$totalQuestions = $allQuestions->count();

    	$item = 1;

    	$question = Question::find($item);
    	
    	$reponses = Answer::all()->where('id', '=', $item);

    	// dd($question);

    	return view('test.index')->with('question', $question)
    							 ->with('reponses', $reponses)
    							 ->with('item', $item)
    							 ->with('totalQuestions', $totalQuestions);
    }
}
