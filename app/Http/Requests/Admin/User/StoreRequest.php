<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
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
			'name' => 'required|string',
			'email' => 'required|string|email|unique:users,email',
			'password' => 'required|string|min:6',
			'role' => 'required|integer',
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'Это поле обязательно для заполнения',
			'name.string' => 'Это поле обязательно должно быть строкой',
			'email.required' => 'Это поле обязательно для заполнения',
			'email.string' => 'Это поле обязательно должно быть строкой',
			'email.email' => 'Это поле обязательно должно соответствовать формату email',
			'email.unique' => 'Пользователь с таким email уже существует',
			'password.required' => 'Это поле обязательно для заполнения',
			'password.string' => 'Это поле обязательно должно быть строкой',
			'password.min' => 'Пароль должен быть не менее 6 символов',
			'role.required' => 'Это поле обязательно для заполнения',
			'role.integer' => 'Не верный формат',
		];
	}
}
