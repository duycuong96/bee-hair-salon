
<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-agile">
				<h1>
					<a class="navbar-brand logo" href="{{ url('/') }}">
						<span class="fa fa-scissors" aria-hidden="true" ></span> Bee Hair
					</a>
				</h1>
			</div>
			<div class="nav_w3ls">
				<nav>
					<label for="drop" class="toggle mt-lg-0 mt-1"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<input type="checkbox" id="drop" />
						<ul class="menu">
							<li class="mr-lg-3 mr-2 active"><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li class="mr-lg-3 mr-2"><a href="{{ route('customer.branchSalon.index') }}">Salon</a></li>
							<li class="mr-lg-3 mr-2"><a href="{{ route('customer.post.list') }}">Bài viết</a></li>
							<li class="mr-lg-3 mr-2"><a href="{{ route('customer.about') }}">Về chúng tôi </a></li>
                            <li class="mr-lg-3 mr-2"><a href="/lien-he">Liên hệ</a></li>
                            @guest
                                <li class="mr-lg-3 mr-2 p-0">
                                    <a href="{{route('customer.formRegister')}}">Đăng ký</a>
                                </li>
                                <li class="mr-lg-3 mr-2 p-0">
                                    <a href="{{route('customer.formLogin')}}">Đăng nhập</a>
                                </li>
                            @endguest
                            @auth
                                <li class="mr-lg-3 mr-2 p-0">
                                    <a href="{{route('customer.tai-khoan.index')}}">Tài khoản</a>
                                </li>
                            @endauth

						</ul>
				</nav>
			</div>

		</div>
	</div>
</header>
