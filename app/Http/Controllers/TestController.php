<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Interanswer;
use App\Model\Question;
use App\Model\User;
use Auth;
use DB;
use Redirect;
use Request;

class TestController extends Controller
{
    public function index(){

        $resultats = DB::table('questions')
                        ->join('interanswers', 'questions.id', '=', 'interanswers.question_id')
                        ->join('answers', 'interanswers.answer_id', '=', 'answers.id')
                        ->inRandomOrder()
                        ->get();

        $first = $resultats[0]->question_id;

        return view('test.index')
                        ->with('resultats', $resultats)
                        ->with('first', $first);
    }
    

    public function store(){

        $values = Request::all();

        if( Auth::check() ) {

            // dd($values['result_chart']);

            $occu1 = mb_substr_count($values['result_chart'], '1');
            // dd($occu1);
            $occu2 = mb_substr_count($values['result_chart'], '2');
            $occu3 = mb_substr_count($values['result_chart'], '3');
            $occu4 = mb_substr_count($values['result_chart'], '4');
            $occu5 = mb_substr_count($values['result_chart'], '5');
            $occu6 = mb_substr_count($values['result_chart'], '6');

            $user = User::where('id', Auth::user()->id)->first();

            $user->travaillomane = $occu1;
            $user->empathique = $occu2;
            $user->rebelle = $occu3;
            $user->reveur = $occu4;
            $user->perseverant = $occu5;
            $user->promoteur = $occu6;

            $user->profilpsy = $values['result_tree'];

            $user->save();

        }

            return redirect()->route('results', ['profile' => $values['result_tree']]);
    }
}
