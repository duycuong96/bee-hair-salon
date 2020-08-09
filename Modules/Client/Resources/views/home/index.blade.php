
@extends('client::layouts.master')
@section('title','BeeHair')
@section('content')



<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2"/>
		<input type="radio" name="slides" id="slides_3"/>
		<input type="radio" name="slides" id="slides_4"/>

		<ul class="banner_slide_bg">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay">
						<div class="banner-text">
							<div class="container">
								<h2 class="movetxt agile-title text-capitalize">We Create and Renovate Hair Style Trends</h2>
								<p>Mỗi lần cắt tóc là một lần đánh bạc nhan sắc của mình, hãy tin tưởng ở chúng tôi !</p>
								<a href="contact.html" class="btn"> Đặt lịch ngay </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h4 class="movetxt agile-title text-capitalize">We Help to grow your hair as well beard </h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
								<a href="contact.html" class="btn">Đặt lịch ngay </a>					
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
							<h2 class="movetxt agile-title text-capitalize">We Design and Create Hair Style Latest</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</p>
								<a href="contact.html" class="btn"> Đặt lịch ngay</a>	
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation"> 
			<div>
			    <label for="slides_1"></label>
			    <label for="slides_2"></label>
			    <label for="slides_3"></label>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

 <!-- banner bottom grids -->
    <section class="content-info py-5" id="about">
        <div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">Về chúng tôi</h3>

            <div class="info-w3pvt-mid text-center px-lg-5">

                <div class="title-desc text-center px-lg-5">
					<img src="{{asset('client/images/about1.png')}}" alt="news image" class="img-fluid">
                    <p class="px-lg-5">Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <a class="btn mt-lg-4 mt-3 read scroll" href="#services" role="button">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom grids -->

<!-- /services -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">Dịch vụ</h3>
            <div class="row ab-info">
                <div class="col-md-6 ab-content ab-content1">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/services2.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4> Trim your Hair</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ab-content ab-content1">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/services1.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Trim your Beard</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ab-info second mt-lg-4">
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/ser3.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>colouring</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/ser4.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Bathing</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/ser5.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>drying</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="single.html"><img src="{{asset('client/images/ser6.jpg')}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Creams</h4>
                            <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- /services -->

	<!-- pricing -->
<section class="pricing py-5">	
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-3 mb-sm-5">GIÁ DỊCH VỤ</h3>
		<div class="row pricing-grids">
			<div class="col-lg-6  mb-lg-0 mb-5">
				<div class="padding">
					<h3>PRICES FOR MUSTACHE TRIMMING</h3>
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 1</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$7</h6>
							</div>
						</div>
						
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item my-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 2</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$10</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 3</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$15</h6>
							</div>
						</div>
						
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 4</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$15</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 5</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$20</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Trim your Mustaches style 6</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$25</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
				</div>
			</div>
			<div class="col-lg-6  mb-lg-0 mb-5">
				<div class="padding">
					<h3>HAIR AND BEARD CUT PRICES</h3>
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 1</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$27</h6>
							</div>
						</div>
						
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item my-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 2</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$21</h6>
							</div>
						</div>
						
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 3</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$25</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 4</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$28</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 5</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$30</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Dye your hair and beard 6</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>$35</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
				</div>		
			</div>
					
		</div>		
	</div>		
</section>
<!-- //pricing -->

<!--/order-now-->
    <section class="order-sec py-5">
        <div class="container py-md-5">
            <div class="test-info text-center">
                <h3 class="tittle order">
                    <span>HÃY GỌI CHO CHÚNG TÔI ĐỂ ĐẶT LỊCH HẸN</span>Nhân viên của chúng tôi sẽ gọi lại ngay lập tức và đặt lịch hẹn</h3>
                <h4 class="tittle my-2">123456789  </h4>

                <div class="read-more mx-auto m-0 text-center">
                    <a href="contact.html" class="read-more scroll btn">Click tại đây</a> </div>
            </div>
        </div>
    </section>
	<!--//order-now-->
	
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

<!-- subscribe -->
<section class="subscribe" id="subscribe">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 d-flex subscribe-left p-lg-5 py-sm-5 py-4">
				<div class="news-icon mr-3">
					<span class="fa fa-paper-plane" aria-hidden="true"></span>
				</div>
				<div class="text">
					<h3>Đăng ký nhận tin khuyến mãi</h3>
				</div>
			</div>
			<div class="col-md-7 subscribe-right p-lg-5 py-sm-5 py-4">
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your email here" required="">
					<button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //subscribe -->





@endsection
