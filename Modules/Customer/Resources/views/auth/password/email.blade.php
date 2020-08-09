@extends('customer::layouts.master')
@section('title', 'Quên mật khẩu')
@section('content')


    <section class="inner-page-banner" id="home">
    </section>
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </div>
    <!-- //page details -->
    <!-- // login box -->
    <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="heading text-center mb-3 mb-sm-5">
                    @yield('title')
                </h3>
                @if (session('status'))
                    <div class="title-desc text-center px-lg-5">
                        <p class="px-lg-5 sub-wthree text-danger">
                            {{ session('status') }}
                        </p>
                    </div>
                @endif
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form action="{{ route('customer.send.link.email') }}" class="w3layouts-contact-fm" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="" value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <div>
                                <label class="col-form-label text-danger">
                                    {{ $message }}</i>
                                </label>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="form-group mx-auto mt-3">
                                <button type="submit" class="btn submit">Lấy lại mật khẩu</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a href="" class="float-left">Đăng ký tài khoản mới</a>
                        <a href="{{ route('customer.formLogin') }}" class="float-right">Đăng nhập</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- // login box -->


@endsection
