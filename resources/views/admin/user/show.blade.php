@extends('admin.layout.admin')
@section('title')Пользователь {{ $user->name }}@endsection
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6 d-flex align-items-center">
					<h1 class="m-0 mr-2">{{ $user->name }}</h1>
					<a href="{{ route('admin.users.edit', $user->id) }}" class="text-success mr-2" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
					<form action="{{ route('admin.users.delete', $user->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash-alt text-danger"></i></button>
					</form>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.categories') }}">Пользователи</a></li>
						<li class="breadcrumb-item active">{{ $user->name }}</li>
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
										<th>Имя</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
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