<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\User;
use Illuminate\Http\Request;

class HistorychartController extends Controller
{
    public function index() {

    	$user = Auth::user();
  

	return view('historychart.index')->with('user', $user);


    }
}
