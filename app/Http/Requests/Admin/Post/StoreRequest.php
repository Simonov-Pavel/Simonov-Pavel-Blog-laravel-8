<?php

namespace App\Http\Requests\Admin\Post;

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
			'title' => 'required|string|unique:posts',
			'content' => 'required|string',
			'preview_img' => 'required|file',
			'main_img' => 'required|file',
			'category_id' => 'required|integer|exists:categories,id',
			'tag_ids' => 'nullable|array',
			'tag_ids.*' => 'nullable|integer|exists:tags,id',
		];
	}

	public function messages()
	{
		return [
			'title.required' => 'Это поле обязательно для заполнения',
			'title.string' => 'Это поле должно быть строкой',
			'title.unique' => 'Пост с таким названием уже существует',
			'content.required' => 'Это поле обязательно для заполнения',
			'content.string' => 'Это поле должно быть строкой',
			'preview_img.required' => 'Это поле обязательно для заполнения',
			'preview_img.file' => 'Это поле должно быть файлом',
			'main_img.required' => 'Это поле обязательно для заполнения',
			'main_img.file' => 'Это поле должно быть файлом',
			'category_id.required' => 'Это поле обязательно для заполнения',
			'category_id.integer' => 'Это поле должно быть числом',
			'category_id.exists' => 'Данного значения не существует',
			'tag_ids.integer' => 'Это поле должно быть числом',
			'tag_ids.exists' => 'Данного значения не существует',
		];
	}
}
