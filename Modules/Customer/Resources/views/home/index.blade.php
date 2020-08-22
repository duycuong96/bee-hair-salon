@extends('customer::layouts.master')

@section('title', 'BeeHair Salon')

@section('content')

    <!-- banner -->
    <div class="banner_w3lspvt" id="home">
        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />
            <input type="radio" name="slides" id="slides_4" />

            <ul class="banner_slide_bg">
                <li>
                    <div class="slider-info bg1">
                        <div class="bs-slider-overlay">
                            <div class="banner-text">
                                <div class="container">
                                    <h2 class="movetxt agile-title text-capitalize">Khai trương cửa hàng
                                    </h2>
                                    <p>216, Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội
                                    </p>
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
                                    <h4 class="movetxt agile-title text-capitalize">We Help to grow your hair as well beard
                                    </h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has
                                        survived not only five centuries.</p>
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
                                    <h2 class="movetxt agile-title text-capitalize">We Design and Create Hair Style Latest
                                    </h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has
                                        survived not only five centuries.</p>
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

    <!-- list-salon -->
    <div class="service text-center py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <div class="price-sty position-relative mb-5">
                <h3 class="heading text-center text-bl mb-2">Danh sách cửa hàng</h3>
            </div>
            <div class="row pt-2">
                @foreach ($salons as $salon)
                    <div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
                        <img src="{!! url('storage/'.  $salon->thumb_img) !!}" alt="" class="img-fluid" />
                        <div class="bottom-ser-w3pvt serv-bg-clr4">
                            <h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">
                                {{$salon->ward_id}}
                            </h4>
                            <p>{{ number_format($salon->phone, 0, ',', '.') }}</p>
                            <a href=" {{route('customer.salon.show', $salon->id)}} " class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- //lisi-salon -->

    <!-- /services -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Dịch vụ</h3>
            <div class="row ab-info">
                @foreach ($servicesT as $serviceT)
                    <div class="col-md-6 ab-content ab-content1">
                        <div class="ab-content-inner">
                            <a href="single.html">
                                {{-- <img src="{!! url('storage/'.  json_decode($serviceT->images)[0]) !!}" alt="news image"
                                    class="img-fluid"></a> --}}
                            <div class="ab-info-con">
                                <h4> {{ $serviceT->name }} </h4>
                                <a href="single.html" class="read-more two btn m-0 px-3"><span
                                        class="fa fa-arrow-circle-o-right"> </span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row ab-info second mt-lg-4">
                @foreach ($servicesB as $serviceB)
                    <div class="col-md-3 ab-content">
                        <div class="ab-content-inner">
                            {{-- <a href="single.html"><img src="{!! url('storage/'.  json_decode($serviceB->images)[0]) !!}" alt="news image"
                                    class="img-fluid"></a> --}}
                            <div class="ab-info-con">
                                <h4>{{$serviceB->name}}</h4>
                                <a href="single.html" class="read-more two btn m-0 px-3"><span
                                        class="fa fa-arrow-circle-o-right"> </span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        <h3>Dịch vụ mới</h3>
                        <!-- Item starts -->
                        @foreach ($servicesB as $serviceB)
                            <div class="menu-item">
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{$serviceB->name}}</h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>{{ number_format($serviceB->sale_price, 0, ',', ' ') }} đ</h6>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        <!-- Item ends -->
                    </div>
                </div>
                <div class="col-lg-6  mb-lg-0 mb-5">
                    <div class="padding">
                        <h3>Dịch vụ ưa thích</h3>
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
                    <span>HÃY GỌI CHO CHÚNG TÔI ĐỂ ĐƯỢC TƯ VẤN</span></h3>
                <h4 class="tittle my-2">+84 367896789</h4>

                <div class="read-more mx-auto m-0 text-center">
                    <a href="contact.html" class="read-more scroll btn">Click tại đây</a> </div>
            </div>
        </div>
    </section>
    <!--//order-now-->




    <!--/testimonials-->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Đánh giá của khách hàng</h3>
            <div class="row mt-3">
                @foreach ($reviews as $review)
                    <div class="col-md-4 test-grid text-left px-lg-3">
                        <div class="test-info">

                            <p>{{$review->detail}}</p>
                            <h3 class="mt-md-4 mt-3"> {{$review->customer['name']}} </h3>

                            <div class="test-img text-center mb-3">
                                <img src="{!! url('storage/'.  $review->avatar) !!}" class="img-fluid" alt="user-image">
                            </div>
                        </div>
            </div>
            @endforeach

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
                        <input type="email" name="email" placeholder="Nhập email của bạn" required="">
                        <button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //subscribe -->
@endsection
