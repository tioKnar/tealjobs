<?php

namespace App\Http\Controllers;

use App\Model\User;
use Redirect;
use Request;
use Validator;

class UserController extends Controller
{	
	public function __construct() {

        $this->middleware('auth');
    }
    
     public function index() {
    
    	$user = User::where('id', $_GET['id'])->first();

    	return view('userupdate.index')->with('user', $user);
    }

    public function update() {

    	
    	$values = Request::all();

    	$rules = [
			'firstname' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'email' => 'email|required',
			'role' => 'required|string',

		];

		$validator = Validator::make($values, $rules, [
			'email.email' => 'E-mail invalide',
			'email.required' => 'Veuillez entrer un email',
			'firstname.string' =>'Prénom invalide',
			'firstname.required' =>'Veuillez entrer un prénom',
			'lastname.string' =>'Nom invalide',
			'lastname.required' =>'Veuillez entrer un nom',
			'role.string' => 'Rôle invalide',
		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$user = User::where('id', $_GET['id'])->first();

		$user->email = $values['email'];
		$user->firstname = $values['firstname'];
		$user->lastname = $values['lastname'];
		$user->role = $values['role'];

		$user->save();

		flash('Utilisateur modifié')->success();

		return Redirect::back();
    }
}
