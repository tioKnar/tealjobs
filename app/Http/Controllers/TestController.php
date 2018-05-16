<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Interanswer;


class TestController extends Controller
{
    public function index(){

        return view('test.index');
    	
    }
}
