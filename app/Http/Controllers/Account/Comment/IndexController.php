<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		return view('account.comment');
	}
}
