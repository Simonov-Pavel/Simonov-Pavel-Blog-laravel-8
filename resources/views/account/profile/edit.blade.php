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

</div>
@endsection