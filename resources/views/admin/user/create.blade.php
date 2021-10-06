@extends('admin.layout.admin')
@section('title', 'Админ панель-добавление пользователя')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Добавление пользователя</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.users') }}">Пользователи</a></li>
						<li class="breadcrumb-item active">Добавление</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="col-6">
				<form action="{{ route('admin.users.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Имя</label>
						<input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Введите имя пользователя" required>
						@error('title')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Введите почту пользователя" required>
						@error('email')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Пароль</label>
						<input type="password" class="form-control" name="password" placeholder="Введите пароль пользователя" required>
						@error('password')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group col-6">
						<label>Выберете роль пользователя</label>
						<select class="form-control" name="role">
							@foreach($roles as $id=>$role)
							<option value="{{ $id }}" {{$id == old('role_id') ? ' selected':''}}>{{$role}}</option>
							@endforeach
						</select>
						@error('role')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<input type="submit" class="btn btn-primary" value="Добавить">
				</form>
			</div>
		</div>
	</section>
</div>
@endsection