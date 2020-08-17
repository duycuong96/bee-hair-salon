@extends('customer::layouts.master')

@section('title', 'BeeHair')

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
            <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
        </ol>
    </div>
    <!-- //page details -->
    <!--about-mid -->
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Giới thiệu</h3>
        <div class="row mid-grids mt-lg-5 mt-3">
            <div class="col-md-5 content-w3pvt-img">
                <img src="{{ asset('client/images/ab1.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 content-left-bottom entry-w3ls-info text-left mt-3">
                <h4>Về chúng tôi
                    <br>BeeHair Salon</h4>
                <p class="mt-2 text-left">Xuất phát từ ý tưởng nung nấu của 5 thành viện từ thời còn sinh viên. Đến năm 2020 chúng tôi tập hợp lại khởi nghiệp với dịch vụ về tóc dành cho cả nam và nữ. Chúng tôi đã cùng nhau xây dựng lên hệ thống đặt lịch cắt tóc giúp khách hàng thuận tiện hơn trong công việc hàng ngày.</p>

            </div>


        </div>
    </div>
    <!-- //about-mid -->
    <!-- states -->
    <section class="stats-count">
        <div class="overlay py-5">
            <div class="container py-md-5">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info ">
                        <h5>700</h5>
                        <h6 class="pt-2">Khách hàng</h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
                        <h5>250 +</h5>
                        <h6 class="pt-2">Giải thưởng</h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
                        <h5>150</h5>
                        <h6 class="pt-2">Stylist</h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
                        <h5>125</h5>
                        <h6 class="pt-2">Cửa hàng</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//states -->

    <!--//team -->
    <section class="banner-bottom  py-5">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Đội ngũ của chúng tôi</h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src="images/t1.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3">Vũ Duy Cường</h3>
                        <p>CEO & Fouder</p>
                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 team-gd second text-center my-md-0 my-5">
                    <div class="team-img mb-4">
                        <img src="images/t2.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3">TRẦN HỒNG PHƯỚC</h3>
                        <p>Phó Giám Đốc</p>
                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src="images/t3.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3">Nguyễn Tiến</h3>
                        <p>Mentor</p>
                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--//team -->

@endsection
