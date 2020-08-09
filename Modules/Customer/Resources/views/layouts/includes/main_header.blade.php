
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
							<li class="mr-lg-3 mr-2"><a href="/ve-chung-toi">Về chúng tôi </a></li>
							<li class="mr-lg-3 mr-2"><a href="/thu-vien">Bộ sưu tập</a></li>
							<li class="mr-lg-3 mr-2"><a href="/lien-he">Liên hệ</a></li>
							<li class="mr-lg-3 mr-2 p-0">

								<label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
								<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-2"/>
								<ul class="inner-dropdown">
									<li><a href="/dich-vu">Dịch vụ</a></li>
									<li><a href="/chi-tiet-salon">Chi tiết salon</a></li>
								</ul>
								</li>
							

						</ul>
				</nav>
			</div>

		</div>
	</div>
</header>