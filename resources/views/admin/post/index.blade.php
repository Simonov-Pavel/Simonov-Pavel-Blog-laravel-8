@extends('admin.layout.admin')
@section('title', 'Админ панель-посты')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Посты</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item active">Посты</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Добавить пост</a>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-8">
					<div class="card">
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
								<thead>
									<tr>
										<th>ID</th>
										<th>Название</th>
										<th colspan="3" class="text-center">Деиствие</th>
									</tr>
								</thead>
								<tbody>
									@foreach($posts as $post)
									<tr>
										<td>{{$post->id}}</td>
										<td>{{$post->title}}</td>
										<td class="text-center">
											<a href="{{ route('admin.posts.show', $post->id) }}" title="Смотреть"><i class="far fa-eye"></i></a>
										</td>
										<td class="text-center">
											<a href="{{ route('admin.posts.edit', $post->id) }}" class="text-success" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
										</td>
										<td class="text-center">
											<form action="{{ route('admin.posts.delete', $post->id) }}" method="post">
												@csrf
												@method('DELETE')
												<button type="submit" class="border-0 bg-transparent"><i class="fas fa-times text-danger"></i></button>
											</form>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>
@endsection