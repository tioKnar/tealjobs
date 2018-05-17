<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Interanswer;
use Redirect;


class TestController extends Controller
{
    public function index(){

    	

        return view('test.index');

    }

    public function store(){
        $values = Request::all();

        // $rules = [
        //     "1" =>
        // ];
        // return Redirect::back();
    }

}


