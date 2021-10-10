<?php

namespace App\Http\Requests\Account\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
			'email' => 'required|string|email|unique:users,email,' . $this->user_id,
			'user_id' => 'required|integer|exists:users,id',
			'address' => 'nullable|string',
			'tel' => 'nullable|string',
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
			'address.string' => 'Это поле обязательно должно быть строкой',
			'tel.string' => 'Это поле обязательно должно быть строкой',
		];
	}
}