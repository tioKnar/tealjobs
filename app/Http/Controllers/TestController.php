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



<<<<<<< HEAD


}

=======
>>>>>>> 6830d9c90d115f619573f767dd6789954fccb27b
