<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.like.index', compact('user'));
	}
}
