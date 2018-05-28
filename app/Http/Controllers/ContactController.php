<?php

namespace App\Http\Controllers;

use App\Mail\FormulaireContact;
use Mail;
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
            'email_contact' => 'email|required',
            'name_contact' => 'string',
            'lastname_contact' => 'string',
            'object_contact' => 'string',
            'message_contact' => 'string',
        ];

        $validator = Validator::make($values, $rules,
        [
           'email_contact.email' => 'Votre email est invalide',
           'name_contact.string' => 'Votre prénom est obligatoire',
           'lastname_contact.string' => 'Votre nom de famille est obligatoire',
           'object_contact.string' => 'Votre object est obligatoire',
           'message_contact.string' => 'Votre message est obligatoire',
        ]);

        if($validator->fails()) {
            return Redirect::back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $title = 'Formulaire de message';
        $content = $values['lastname_contact'] . ' - ' . $values['name_contact'] . '<br>' . $values['message_contact'];

        $emails = [
            [getenv('APP_EMAIL')]
        ];
        foreach($emails as $email) {
            Mail::to($email)
                ->send(new FormulaireContact($title, $content));
        }

        flash('Message envoyé !')->success();

        return Redirect::back();
    }
}
