@extends('customer::layouts.master')
@section('title', 'BeeHair')
@section('content')


    <section class="inner-page-banner" id="home">
    </section>
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
        </ol>
    </div>
    <!-- //page details -->
    <!-- //banner-botttom -->
    <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="heading text-center mb-3 mb-sm-5">
                    LIÊN HỆ CHÚNG TÔI</h3>
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5 sub-wthree">Mọi thông tin liên hệ vui lòng nhập bên dưới</p>
                    @if (session('success'))
                        <p class="text-success">{{session('success')}}</p>
                    @endif
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form action="{{route('customer.lien-he.store')}}" class="w3layouts-contact-fm" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" type="text" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" type="text" name="title" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" name="content" id="" required></textarea>
                            </div>
                        </div>
                        <div class="form-group mx-auto mt-3">
                            <button type="submit" class="btn submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //banner-botttom -->

    <div class="map-w3layouts">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044334!2d105.7445984147634!3d21.038127785993293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIHRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1596903459718!5m2!1svi!2s"
            allowfullscreen=""></iframe>
    </div>


@endsection
