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
            <li class="breadcrumb-item active" aria-current="page">Chi tiết salon</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- /single-page -->

    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">salon {{$salon->name}} </h3>
        <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
            <div class="content-sing-w3ls">
                <img class="img-fluid" src="{!! url('storage/'.  $salon->image) !!}" alt="">
                <h4>Một vài nét về cửa hàng</h4>
                {{-- <p> {{$salon->content }} </p> --}}
            </div>
            <div class="row my-lg-5 mt-3 mx-0">
                <div class="col-lg-6 text-info pl-0">
                <p> {{$salon->content }} </p>
                </div>
                <div class="col-lg-6 mt-3 team-img">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="{!! url('storage/'.  $salon->image) !!}" alt="salon-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-sec-w3ls">
                <h4 class="leave-w3ls mb-5">Bình luận</h4>
                <ul class="list-unstyled">
                    @foreach ($reviews as $review)
                        <li class="media">
                            <img class="mr-3 img-fluid" src="{!! url('storage/'.  $review->customer->avatar) !!}" alt="">

                            <div class="media-body">
                                <h5 class="mt-0 mb-1">{{$review->customer->name}}</h5>
                                <p class="mt-3">{{$review->detail}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $reviews->links() }}
            </div>


        </div>


    </div>
    <!-- //single-page -->


@endsection
