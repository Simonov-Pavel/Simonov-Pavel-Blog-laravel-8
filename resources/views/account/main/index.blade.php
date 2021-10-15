@extends('account.layout.account')
@section('title', 'Профиль пользователя')
@section('content')
<div class="content-wrapper">

	<section class="content">
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>Инфо</h3>
							<p>Профиль</p>
						</div>
						<div class="icon">
							<i class="fas fa-cogs"></i>
						</div>
						<a href="{{ route('user') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>10</h3>
							<p>Likes</p>
						</div>
						<div class="icon">
							<i class="fas fa-heart"></i>
						</div>
						<a href="{{ route('account.like') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>10</h3>

							<p>Комментарии</p>
						</div>
						<div class="icon">
							<i class="fas fa-comment"></i>
						</div>
						<a href="{{ route('account.comment') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
@endsection