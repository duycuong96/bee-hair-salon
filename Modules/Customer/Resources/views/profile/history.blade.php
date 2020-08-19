
@extends('customer::layouts.master')
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
		<li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
	</ol>
</div>
<!-- //page details -->
<div class="student-profile py-4">
    <div class="container">
        <div class="row">

            @include('customer::profile.manage_profile')

            <div class="col-lg-8">

                <form>
                    <div class="content-wrap">
                        <h4 class="text-center mt-5">Lịch sử đặt lịch & Đánh giá</h4>
                            <!-- The Timeline -->

                            <ul class="timeline">

                                <!-- Item 1 -->
                                <li>
                                    <div class="direction-r">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">My current employment. Way better than the position before!</div>
                                    </div>
                                </li>

                                <!-- Item 2 -->
                                <li>
                                    <div class="direction-l">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
                                    </div>
                                </li>

                                <!-- Item 3 -->
                                <li>
                                    <div class="direction-r">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="direction-l">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                    </div>
                                </li>

                            </ul>



                    </div>
                </form>

            </div>
        </div>
    </div>
</div>







@endsection
