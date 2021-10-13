@extends('account.layout.account')
@section('title', 'Комментарии')
@section('content')
<div class="content-wrapper">

	<section class="content">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Комментарии</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="{{ route('account') }}">Главная</a></li>
							<li class="breadcrumb-item active">Комментарии</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection