<?php

namespace App\Http\Controllers;

use Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }
}
