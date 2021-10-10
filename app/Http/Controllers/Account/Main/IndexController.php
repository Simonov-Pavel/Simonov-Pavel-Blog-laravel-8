<?php

namespace App\Http\Controllers\Account\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.main.index', compact('user'));
	}
}
