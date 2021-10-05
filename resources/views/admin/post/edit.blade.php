@extends('admin.layout.admin')
@section('title')Редактирование {{$post->title}}@endsection
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Редактирование {{$post->title}}</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.posts') }}">Посты</a></li>
						<li class="breadcrumb-item active">Редактировать</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div>
				<form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<label>Название поста</label>
						<input type="text" class="form-control col-6" name="title" value="{{ $post->title }}" placeholder="Введите название поста" required>
						@error('title')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<textarea id="summernote" name="content">{{ $post->content }}</textarea>
						@error('content')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Превью изображение</label>
						@if(isset($post->preview_img))
						<div class="w-25">
							<img src="{{ url('storage/'. $post->preview_img) }}" alt="preview_img" class="w-50 mb-2">
						</div>
						@endif
						<div class="input-group col-6">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="preview_img" id="exampleInputFile">
								<label class="custom-file-label" for="exampleInputFile">Выберете изображение</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text">Загрузка</span>
							</div>
							@error('preview_img')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Главное изображение поста</label>
						@if(isset($post->main_img))
						<div class="w-50">
							<img src="{{ url('storage/'. $post->main_img) }}" alt="main_img" class="w-50 mb-2">
						</div>
						@endif
						<div class="input-group col-6">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="main_img" id="exampleInputFile">
								<label class="custom-file-label" for="exampleInputFile">Выберете изображение</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text">Загрузка</span>
							</div>
							@error('main_img')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group col-6">
						<label>Выберете категорию</label>
						<select class="form-control" name="category_id">
							@foreach($categories as $category)
							<option value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected':''}}>{{$category->title}}</option>
							@endforeach
						</select>
						@error('category_id')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Выберете тэги</label>
						<select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберете тэги" style="width: 100%;">
							@foreach($tags as $tag)
							<option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}} value="{{ $tag->id }}">{{$tag->title}}</option>
							@endforeach
						</select>
						@error('tag_ids')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<input type="submit" class="btn btn-primary mb-3" value="Обновить">
				</form>
			</div>
		</div>
	</section>
</div>
@endsection