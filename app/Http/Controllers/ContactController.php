<?php

namespace App\Http\Controllers;

use Redirect;
use Request;
use Validator;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }

    public function store() {
        //dd($_POST);
        $values = Request::all();

        $rules =
        [
            'email' => 'email|required',
            'name' => 'string',
            'lastname' => 'string',
            'object' => 'string',
            'message' => 'string',
        ];

        $validator = Validator::make($values, $rules,
        [
           'email.email' => 'Votre email est invalid',
           'name.string' => 'Votre prénom est obligatoire',
           'lastname.string' => 'Votre nom de famille est obligatoire',
           'object.string' => 'Votre object est obligatoire',
           'message.string' => 'Votre message est obligatoire',
        ]);

        if($validator->fails()) {
            return Redirect::back()
                            ->withErrors($validator)
                            ->withInput();
        }

    }
}
