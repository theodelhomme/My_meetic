<?php namespace Meetic\Http\Controllers;

use Meetic\Http\Requests;
use Meetic\Http\Controllers\Controller;
use Meetic\User;
use Request;
use Validator;
use Auth;
use Hash;
use Mail;
use Redirect;
use Input;
use DB;
use Meetic\Http\Requests\UserFormSignRequest;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('accueil');
	}
	public function signin()
	{
		return view('signin');
		
	}
	public function login()
	{
		$data = Input::all();
		$login = $data['login'];
		$password = $data['password'];

		if (Auth::attempt(['login' => $login, 'password' => $password]))
		{
		    return redirect('/');
		}
		else {
			return "Permission refusée";
		}

	}
	public function formLogin()
	{
		return view('login');
	}
	public function deconnexion()
	{
		Auth::logout();
		return Redirect::to('/login');
	}	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(UserFormSignRequest $request)
	{	
		$input = Input::all();
		$user = User::firstOrCreate(array('login' => $input['login'], 'name' => $input['name'] , 'lastname' => $input['lastname'], 'birthdate' => $input['birthdate'], 'gender' => $input['gender'], 'city' => $input['city'], 'departement' => $input['departement'], 'region' => $input['region'], 'country' => $input['country'], 'email' => $input['email'], 'password' => Hash::make($input['password'])));
		return redirect('login');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		//
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profil = User::find($id);
		return view('profil', ['user' => $profil]);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
