@extends('account.layout.account')
@section('title', 'Личный кабинет')
@section('content')
<div class="content-wrapper">

	<section class="content">
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle d-block my-2" src="{{ url('storage/images/avatar/'. $user->avatar) }}" alt="User profile picture">

				<h3 class="profile-username text-center">{{$user->name}}</h3>

				<ul class="list-group list-group-unbordered col-6 mx-auto">
					@if(isset($user->name))
					<li class="list-group-item">
						<b class="mx-2">Имя</b> <a class="float-right mx-2">{{$user->name}}</a>
					</li>
					@endif
					@if(isset($user->email))
					<li class="list-group-item">
						<b class="mx-2">Email</b> <a class="float-right mx-2">{{ $user->email }}</a>
					</li>
					@endif
					@if(isset($user->adress))
					<li class="list-group-item">
						<b class="mx-2">Адрес</b> <a class="float-right mx-2"></a>
					</li>
					@endif
					@if(isset($user->tel))
					<li class="list-group-item">
						<b class="mx-2">Телефон</b> <a class="float-right mx-2"></a>
					</li>
					@endif
				</ul>
				<a href="#" class="btn btn-primary btn-block my-3"><b>Редактировать профиль</b></a>
			</div>
			<!-- /.box-body -->
		</div>
	</section>

</div>
@endsection