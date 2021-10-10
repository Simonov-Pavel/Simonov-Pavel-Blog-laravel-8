<?php

namespace App\Http\Controllers\Account\Edit;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
	public function __invoke()
	{
		$user = auth()->user();
		return view('account.profile.edit', compact('user'));
	}
}
