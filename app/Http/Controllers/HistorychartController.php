<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\User;
use App\Model\Profile;
use Illuminate\Http\Request;

class HistorychartController extends Controller
{
    public function index() {

    	$user = Auth::user();
  		$profile = Profile::get();

	return view('historychart.index')->with('user', $user);
								


    }
}
