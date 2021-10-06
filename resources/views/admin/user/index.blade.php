@extends('admin.layout.admin')
@section('title', 'Админ панель-пользователи')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Пользователи</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item active">Пользователи</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Добавить пользователя</a>
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
										<th colspan="3" class="text-center">Деиствие</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)
									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td class="text-center">
											<a href="{{ route('admin.users.show', $user->id) }}" title="Смотреть"><i class="far fa-eye"></i></a>
										</td>
										<td class="text-center">
											<a href="{{ route('admin.users.edit', $user->id) }}" class="text-success" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>
										</td>
										<td class="text-center">
											<form action="{{ route('admin.users.delete', $user->id) }}" method="post">
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