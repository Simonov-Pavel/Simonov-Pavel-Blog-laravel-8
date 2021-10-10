<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{ route('home') }}" class="brand-link">
		<img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Личный кабинет</span>
	</a>
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ url('storage/images/avatar/'. $user->avatar) }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="{{route('account')}}" class="d-block">{{Auth::user()->name}}</a>
			</div>
		</div>

		<!-- Sidebar Menu -->

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ route('account') }}" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>Главная</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>

</aside>