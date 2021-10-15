<header class="edica-header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="Edica"></a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="edicaMainNav">
				<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
						<div class="dropdown-menu" aria-labelledby="blogDropdown">
							<a class="dropdown-item" href="blog.html">Blog Archive</a>
							<a class="dropdown-item" href="blog-single.html">Blog Post</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<div class="dropdown-menu" aria-labelledby="pagesDropdown">
							<a class="dropdown-item" href="404.html">404</a>
							<a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
				<ul class="navbar-nav mt-2 mt-lg-0">
					@if(auth()->user() == null)
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}"> Войти</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">Регистрация</a>
					</li>
					@else
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Добро пожаловать {{auth()->user()->name}}
						</a>

						<div class="dropdown-menu" aria-labelledby="pagesDropdown">
							<a class="dropdown-item" href="{{ route('account') }}">Личный кабинет</a>
							@if(auth()->user()->role == $admin)
							<a class="dropdown-item" href="{{route('admin')}}">Панель управления</a>
							@endif
						</div>
					</li>
					<li class="nav-item">
						<form action="{{ route('logout') }}" method="post">
							@csrf
							<input type="submit" class="btn btn-outline-primary" value="Выйти">
						</form>
					</li>

					@endif
				</ul>
			</div>
		</nav>
	</div>
</header>