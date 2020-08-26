
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
                            @if (empty($data[0]))
                            <br>
                                <p class="alert-success text-center">Lịch sử đặt lịch trống.</p>
                            @else
                                <ul class="timeline">
                                    @foreach ($data as $item)
                                    <!-- Item -->
                                    <li>
                                        <div class="direction-{{$loop->iteration %2 == 0 ? 'r' : 'l'}}">
                                            <div class="flag-wrapper">
                                                <span class="flag">{{$item->branchSalon->name}}</span>
                                                <span class="time-wrapper"><span class="time">{{$item->updated_at->format('l - d/m/Y')}}</span></span>
                                            </div>
                                            <div class="desc">{{$item->detail}}</div>
                                        </div>
                                    </li>

                                    @endforeach
                                </ul>
                                {{ $data->links() }}
                            @endif

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>







@endsection
