<?php namespace Meetic\Http\Requests;

use Meetic\Http\Requests\Request;

class UserFormSignRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'login' => 'required|unique:users|alpha',
			'name' => 'required|alpha',
			'lastname' => 'required|alpha',
			'birthdate' => 'required|date',
			'gender' => 'required|',
			'city' => 'required|alpha',
			'departement' => 'required|numeric',
			'region' => 'required|alpha',
			'country' => 'required|alpha',
			'email' => 'required|email|unique:users',
			'password' => 'required|alpha_num',

		];
	}

}
