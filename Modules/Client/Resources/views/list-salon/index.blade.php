@extends('client::layouts.master')
@section('title','BeeHair')
@section('content')


<!-- banner -->
<section class="inner-page-banner" id="home">
</section>
<!-- //banner -->
<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb mb-0">
		<li class="breadcrumb-item">
			<a href="index.html">Trang chủ</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Danh sách cửa hàng</li>
	</ol>
</div>


	
<!-- list-salon -->
<div class="service text-center py-5" id="services">
	<div class="container py-xl-5 py-lg-3">
		<div class="price-sty position-relative mb-5">
			<h3 class="heading text-center text-bl mb-2">Danh sách cửa hàng</h3>
		</div>
		<div class="row pt-2">
			<div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
				<img src="{{asset('client/images/sa1.jpg')}}" alt="" class="img-fluid" />
				<div class="bottom-ser-w3pvt">
					<h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">42 Lê Đại Hành P. Lê Đại Hành, Q. Hai Bà Trưng</h4>
					<p>0898.586.264</p>
					<a href="#" class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
				<img src="{{asset('client/images/sa2.jpg')}}" alt="" class="img-fluid" />
				<div class="bottom-ser-w3pvt serv-bg-clr2">
					<h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">1026 Đường Láng P. Láng Thượng, Q. Đống Đa</h4>
					<p>0898.586.246</p>
					<a href="#" class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
				<img src="{{asset('client/images/sa3.jpg')}}" alt="" class="img-fluid" />
				<div class="bottom-ser-w3pvt serv-bg-clr3">
					<h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">56 Nguyễn Huy Tưởng P. TX Trung, Q. Thanh Xuân</h4>
					<p>0898.586.250</p>
					<a href="#" class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
				<img src="{{asset('client/images/sa4.jpg')}}" alt="" class="img-fluid" />
				<div class="bottom-ser-w3pvt serv-bg-clr4">
					<h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">407 Trường Chinh P. Khương Trung, Q. Thanh Xuân</h4>
					<p>0898.586.154</p>
					<a href="#" class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //lisi-salon -->






@endsection