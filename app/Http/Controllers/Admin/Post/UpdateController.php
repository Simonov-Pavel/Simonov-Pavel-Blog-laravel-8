<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
	public function __invoke(UpdateRequest $request, Post $post)
	{
		$data = $request->validated();
		$tagIds = $data['tag_ids'];
		unset($data['tag_ids']);
		if (isset($data['preview_img'])) {
			$data['preview_img'] = Storage::disk('public')->put('/images', $data['preview_img']);
		}
		if (isset($data['main_img'])) {
			$data['main_img'] = Storage::disk('public')->put('/images', $data['main_img']);
		}
		$post->update($data);
		$post->tags()->sync($tagIds);
		$posts = Post::all();
		return view('admin.post.index', compact('posts'));
	}
}
