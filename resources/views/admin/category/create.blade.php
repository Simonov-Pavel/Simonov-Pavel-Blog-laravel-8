@extends('admin.layout.admin')
@section('title', 'Админ панель-добавление категории')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Добавление категории</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.categories') }}">Категории</a></li>
						<li class="breadcrumb-item active">Добавление</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="col-6">
				<form action="{{ route('admin.categories.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Название категории</label>
						<input type="text" class="form-control" name="title" placeholder="Введите название категории" required>
						@error('title')
						<div class="text-danger">Это поле обязательно для заполнения</div>
						@enderror

					</div>
					<input type="submit" class="btn btn-primary" value="Добавить">
				</form>
			</div>
		</div>
	</section>
</div>
@endsection