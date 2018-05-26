<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Model\User;
use Redirect;
use Request;
use Validator;

class UsersController extends Controller
{

	public function __construct() {

        $this->middleware('auth');
    }
    
    public function index() {

    	$users = User::paginate(4);

    	return view('users.index')->with('users', $users);
    }

    public function store() {

    	$values = Request::all();

    	$rules = [
			'firstname' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'email' => 'email|required',
			'password' => 'required|string|min:6',
			'role' => 'required|string',
		];

		$validator = Validator::make($values, $rules, [
			'email.email' => 'E-mail invalide',
			'email.required' => 'Veuillez entrer un email',
			'firstname.string' =>'Prénom invalide',
			'firstname.required' =>'Veuillez entrer un prénom',
			'lastname.string' =>'Nom invalide',
			'lastname.required' =>'Veuillez entrer un nom',
			'password.required' =>'Veuillez entrer un mot de passe',
			'password.string' =>'Veuillez entrer un mot de passe',
			'password.min' =>'Le mot de passe doit faire au moins 6 caractères',
			'role.string' => 'Rôle invalide',

		]);

		if($validator->fails()) {


			return Redirect::back()
							->withErrors($validator)
							->withInput();
		}

		$user = new User();

		$user->email = $values['email'];
		$user->firstname = $values['firstname'];
		$user->lastname = $values['lastname'];
		$user->password = Hash::make($values['password']);
		$user->role = $values['role'];

		$user->save();

		flash('Utilisateur ajouté')->success();

		return Redirect::back();
    }

     public function delete() {
     		
	     	$id = $_GET['id'];

	    	$user = User::where('id', $id)->first();
	    		
	    	$user->delete();

	 		return Redirect::back();
    }
}
