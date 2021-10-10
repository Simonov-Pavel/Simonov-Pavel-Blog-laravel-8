<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
	public function __invoke(UpdateRequest $request, User $user)
	{
		$data = $request->validated();
		$data['avatar'] = Storage::disk('public')->put('/images/avatar', $data['avatar']);
		$user->update($data);

		return redirect()->route('account', $user);
	}
}
