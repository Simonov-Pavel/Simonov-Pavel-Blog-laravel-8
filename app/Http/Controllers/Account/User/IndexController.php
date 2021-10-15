<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.user.index', compact('user'));
	}
}
