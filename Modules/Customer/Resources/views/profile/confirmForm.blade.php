@extends('customer::layouts.master')
@section('title', 'Xác nhận tài khoản')
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
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form action="{{ route('customer.confirm') }}" class="w3layouts-contact-fm" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <input type="hidden" name="registration_token" value="{{ $registration_token }}">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="" value="{{ $email }}" disabled>
                            </div>
                            @error('email')
                            <div>
                                <label class="col-form-label text-danger">
                                    {{ $message }}</i>
                                </label>
                            </div>
                            @enderror

                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" name="password" placeholder="">
                            </div>
                            @error('password')
                            <div>
                                <label class="col-form-label text-danger">
                                    {{ $message }}</i>
                                </label>
                            </div>
                            @enderror

                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="">
                            </div>
                            @error('password')
                            <div>
                                <label class="col-form-label text-danger">
                                    {{ $message }}</i>
                                </label>
                            </div>
                            @enderror

                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="form-group mx-auto mt-3">
                                <button type="submit" class="btn submit">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-lg-6">
                        <a href="{{ route('customer.formLogin') }}" class="float-left">Đăng nhập</a>
                        <a href="{{ route('customer.password.reset.showForm') }}" class="float-right">Quên mật khẩu</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- // login box -->


@endsection
