@extends('admin.layout.admin')
@section('title')Категория {{ $category->title }}@endsection
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6 d-flex align-items-center">
					<h1 class="m-0 mr-2">{{ $category->title }}</h1>
					<a href="{{ route('admin.categories.edit', $category->id) }}" class="text-success mr-2" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
					<form action="{{ route('admin.categories.delete', $category->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash-alt text-danger"></i></button>
					</form>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.categories') }}">Категории</a></li>
						<li class="breadcrumb-item active">{{ $category->title }}</li>
					</ol>
				</div>
			</div>
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
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>{{$category->id}}</td>
										<td>{{$category->title}}</td>
									</tr>

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