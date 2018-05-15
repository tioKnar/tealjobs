<?php

namespace App\Http\Controllers;

use App\Model\User;
use Redirect;
use Request;

class AdminController extends Controller
{
    public function index() {

    	return view('admin/index');
    }

    public function store() {


    }
}
