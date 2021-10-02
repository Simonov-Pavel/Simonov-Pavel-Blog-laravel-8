@extends('admin.layout.admin')
@section('title', 'Админ панель-категории')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Категории</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
						<li class="breadcrumb-item active">Категории</li>
					</ol>
				</div>
			</div>
			<div class="col-sm-6">
				<a href="" class="btn btn-primary">Добавить</a>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">

			</div>
		</div>
	</section>
</div>
@endsection