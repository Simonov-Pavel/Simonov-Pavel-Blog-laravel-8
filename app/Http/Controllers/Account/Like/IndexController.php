<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		return view('account.like');
	}
}
