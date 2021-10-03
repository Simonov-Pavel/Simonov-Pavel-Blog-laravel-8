<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
	public function __invoke(StoreRequest $request)
	{
		try {
			$data = $request->validated();
			$tagIds = $data['tag_ids'];
			unset($data['tag_ids']);

			$data['preview_img'] = Storage::put('/images', $data['preview_img']);
			$data['main_img'] = Storage::put('/images', $data['main_img']);
			$post = Post::firstOrCreate($data);
			$post->tags()->attach($tagIds);
		} catch (Exception $exception) {
			abort(404);
		}


		return redirect()->route('admin.posts');
	}
}
