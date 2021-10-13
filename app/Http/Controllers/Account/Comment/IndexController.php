<?php

namespace App\Http\Controllers\Account\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.comment.index', compact('user'));
	}
}
