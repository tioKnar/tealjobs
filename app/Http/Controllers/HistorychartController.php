<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorychartController extends Controller
{
    public function index() {

    	return view('historychart.index');
    }
}
