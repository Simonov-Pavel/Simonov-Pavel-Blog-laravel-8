<?php

namespace App\Http\Controllers\Account\Like;

use App\Http\Controllers\Controller;

class LikeController extends Controller
{
	public function __invoke()
	{
		return view('account.like.index');
	}
}
