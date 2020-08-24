@extends('customer::layouts.master')

@section('title', $data->title)

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
            <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
        </ol>
    </div>


    <div class="w3l-blog-single">
        <div class="single blog py-5">
            <div class="container py-md-3">

                <div class="main-cont-blog">
                    <!-- left side blog post content -->
                    <div class="single-left">
                        <div class="single-left1">
                            <img src="{!!  url('storage/' . $data->image) !!}" alt=" " class="{{ $data->title }}">
                            <div class="btom-cont">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <ul class="admin-post">
                                    <li>
                                        <a href="blog-single.html"><span class="fa fa-user"></span> Alexander</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html"><span class="fa fa-clock-o"></span>13 June 2019</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html"><span class="fa fa-comments-o"></span>Comments 20</a>
                                    </li>
                                </ul>
                                <div>
                                    {!! nl2br($data->content) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- left side blog post content -->
                </div>
            </div>
        </div>
    </div>


    <div class="comments">
        <h3 class="aside-title ">Bình luận:</h3>
        <div class="comments-grids">
            @foreach ($dataComments as $row)
                <div class="media">
                    <img class="img-responsive" src="{{ asset('client/images/blog5.jpg') }}" alt="placeholder image">

                    <div class="media-body comments-grid-right">
                        <h4><a href="#">{{ $row->customer->name }}</a></h4>
                        <ul class="">
                            <li class="font-weight-bold">{{ $row->title }}
                            </li>

                        </ul>
                        <p>{{ $row->content }}</p>
                        {{-- <a href="#comment" class="replay"><span class="fa fa-reply"></span> Reply</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="w3l-comments-form-9 pt-3">
        <div class="coments-forms-sub">
            <div class="wrapper">
                <div class="testi-top">
                    <h3 class="title-main2">Viết bình luận</h3>
                    {{-- @guest
                        <a href="{{ route('customer.formLogin') }}">Đăng nhập để bình luận</a>
                    @endguest --}}


                        <div class="form-commets">
                            <form action="{{ route('customer.post.comment', $data->slug) }}" method="post">
                                @csrf
                                <textarea name="content" placeholder="Viết nội dung bình luận"></textarea>
                                <div class="media">
                                    <input type="hidden" name="customer_id" value="">
                                    {{-- <input type="text" name="name" placeholder="" value="">
                                    <input type="email" name="email" placeholder="Email của bạn"> --}}
                                </div>
                                <div class="text-right">
                                    <button class="btn button-eff" type="submit">Gửi bình luận</button>
                                </div>
                            </form>
                        </div>
                    

                </div>
            </div>
        </div>
    </div>


@endsection
