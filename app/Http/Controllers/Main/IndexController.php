<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function __invoke()
	{
		$admin = User::ROLE_ADMIN;

		return view('main.index', compact('admin'));
	}
}
