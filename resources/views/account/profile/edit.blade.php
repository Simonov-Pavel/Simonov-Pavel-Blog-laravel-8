@extends('account.layout.account')
@section('title', 'Редактирование профиля')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Редактировать профиль</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('account') }}">Главная</a></li>
						<li class="breadcrumb-item active">Редактировать профиль</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div>
				<form action="{{ route('account.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PATCH')

					<div class="form-group">
						<label for="exampleInputFile">Аватар</label>

						<div class="w-25">
							<img src="{{ url('storage/images/avatar/'. $user->avatar) }}" alt="user-avatar" class="w-50 mb-2">
						</div>

						<div class="input-group col-6">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="avatar" id="exampleInputFile">
								<label class="custom-file-label" for="exampleInputFile">Выберете изображение</label>
							</div>
							<div class="input-group-append">
								<span class="input-group-text">Загрузка</span>
							</div>
							@error('avatar')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group">
						<label>Имя</label>
						<input type="text" class="form-control col-6" name="name" value="{{ $user->name }}" placeholder="Введите свое имя" required>
						@error('name')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control col-6" name="email" value="{{ $user->email }}" placeholder="Введите свой tmail" required>
						@error('email')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Адрес</label>
						<input type="text" class="form-control col-6" name="address" value="{{ $user->address }}" placeholder="Введите свой адрес">
						@error('address')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Телефон</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input type="text" class="form-control col-6" name="tel" value="{{ $user->tel }}" data-inputmask="'mask': '8(999) 999-99-99'" id='data-mask' data-mask="" placeholder="8(999) 999-99-99">
						</div>
						@error('tel')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="hidden" name="user_id" value="{{ $user->id }}">
					</div>
					<input type="submit" class="btn btn-primary mb-3" value="Обновить">
				</form>
			</div>
		</div>
	</section>

</div>
@endsection