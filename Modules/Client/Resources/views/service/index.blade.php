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
		<li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
	</ol>
</div>
<!-- //page details -->
<!-- what we do -->
<section class="what-we-do py-5">
	<div class="container py-md-5">
	<h3 class="heading text-center mb-3 mb-sm-5">PHONG CÁCH CỦA CHÚNG TÔI</h3>
		<div class="row what-we-do-grid">
			<div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0">
				<img src="{{asset('client/images/sp1.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-3 col-md-6 bg-grid-clr">
				<h4 class="mt-md-0 my-2">HAIRCUTS</h4>
				<p class="">Sed ut perspiciatis undert sed omnis natus error .</p>
			</div>
			<div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-0 mt-4">
				<img src="{{asset('client/images/sp2.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-0 mt-md-4">
				<h4 class="mt-md-0 my-2">SHAVES</h4>
				<p class="">Sed ut perspiciatis undert sed omnis natus error .</p>
			</div>
			
			<div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-5 mt-4">
				<img src="{{asset('client/images/sp3.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-5 mt-md-4">
				<h4 class="mt-md-0 my-2">BEARD TRIM</h4>
				<p class="">Sed ut perspiciatis undert sed omnis natus error .</p>
			</div>
			<div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-5 mt-4">
				<img src="{{asset('client/images/sp4.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-5 mt-md-4">
				<h4 class="mt-md-0 my-2">MUSTACHE TRIM</h4>
				<p class="">Sed ut perspiciatis undert sed omnis natus error .</p>
			</div>
		</div>
	</div>
</section>
<!-- //what we do -->

<!--/testimonials-->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
                <h3 class="heading text-center mb-3 mb-sm-5">Đánh giá của khách hàng</h3>
            <div class="row mt-3">

                <div class="col-md-4 test-grid text-left px-lg-3">
                    <div class="test-info">

                        <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                        <h3 class="mt-md-4 mt-3"> Abraham Smith</h3>

                        <div class="test-img text-center mb-3">
                            <img src="{{asset('client/images/test1.jpg')}}" class="img-fluid" alt="user-image">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 test-grid text-left px-lg-3 py-sm-5 py-md-0 py-3">
                    <div class="test-info">

                        <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                        <h3 class="mt-md-4 mt-3"> Mariana Noe</h3>
                        <div class="test-img text-center mb-3">
                            <img src="{{asset('client/images/test2.jpg')}}" class="img-fluid" alt="user-image">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 test-grid text-left px-lg-3">
                    <div class="test-info">

                        <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                        <h3 class="mt-md-4 mt-3">Nebula Nairobi</h3>

                        <div class="test-img text-center mb-3">
                            <img src="{{asset('client/images/test3.jpg')}}" class="img-fluid" alt="user-image">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

<!--//testimonials-->

@endsection