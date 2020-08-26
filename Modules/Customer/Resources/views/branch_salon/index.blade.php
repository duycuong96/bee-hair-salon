@extends('customer::layouts.master')
@section('title', 'BeeHair | Danh sách salon')
@section('content')

    <!-- banner -->
    <section class="inner-page-banner" id="home">
    </section>
    <!-- //banner -->
<div class="service text-center py-5" id="services">
	<div class="container py-xl-5 py-lg-3">
		<div class="price-sty position-relative mb-5">
			<h3 class="heading text-center text-bl mb-2">Danh sách cửa hàng</h3>
		</div>
		<div class="row pt-2">
            @foreach ($data as $item)
			<div class="col-lg-3 col-sm-6 px-lg-2 mb-4">
				<img src="{!! url('storage/'.$item->image) !!}" alt="" class="img-fluid" />
				<div class="bottom-ser-w3pvt {{$loop->iteration %2 == 0 ? 'serv-bg-clr2' : ''}}">
					<h4 class="ser-text-w3 text-bl font-weight-bold text-uppercase mb-2">{{$item->address}}</h4>
                    <p>{{number_format($item->phone, 0, ',', '.')}}</p>

                    <a href="{{ route('customer.salon.show', $item->id) }}" class="btn button-style-3 mt-md-5 mt-4">Xem thêm</a>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</div>


@endsection
