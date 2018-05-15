<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Question;

class TestController extends Controller
{
    public function index(){

    	$questions = Question::all();

    	return view('test.index')->with('questions', $questions);
    }
}
