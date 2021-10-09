@extends('admin.layout.admin')
@section('title', 'Админ панель')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


	<!-- Main content -->
	<section class="content">
		<div class="container-fluid mt-3">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>{{$data['usersCount']}}</h3>

							<p>Пользователи</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="{{ route('admin.users') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>{{$data['postsCount']}}</h3>

							<p>Посты</p>
						</div>
						<div class="icon">
							<i class="fas fa-book-open"></i>
						</div>
						<a href="{{ route('admin.posts') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>{{$data['categoriesCount']}}</h3>

							<p>Категории</p>
						</div>
						<div class="icon">
							<i class="fas fa-align-justify"></i>
						</div>
						<a href="{{ route('admin.categories') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>{{$data['tagsCount']}}</h3>

							<p>Тэги</p>
						</div>
						<div class="icon">
							<i class="fas fa-tags"></i>
						</div>
						<a href="{{ route('admin.tags') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection