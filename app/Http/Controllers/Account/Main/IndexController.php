<?php

namespace App\Http\Controllers\Account\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		return view('account.main.index');
	}
}
