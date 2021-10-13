<?php

namespace App\Http\Controllers\Account\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.main.index', compact('user'));
	}
}
