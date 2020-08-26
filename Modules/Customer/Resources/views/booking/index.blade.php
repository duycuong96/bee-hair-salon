@extends('customer::layouts.master')

@section('title', 'Đặt lịch')

    @push('css')

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset('client/css/booking.css') }}">
        <link rel="stylesheet" href="{{ asset('client/scss/booking.css') }}">
    @endpush

@section('content')

    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-12 col-sm-9 col-md-7 col-lg-6 text-center p-5 mt-5 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Đặt lịch</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form  id="msform" method="POST">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Chọn salon</strong></li>
                                    <li id="personal"><strong>Chọn dịch vụ</strong></li>
                                    <li id="payment"><strong>Chọn thời gian</strong></li>
                                    <li id="confirm"><strong>Hoàn tất</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset class="">
                                    <div class="form-card box-salon">
                                        <h2 class="fs-title mb-5">Chọn salon bạn muốn đặt lịch</h2>
                                        @include('customer::booking.booking_salon')
                                    </div>
                                    <input type="button" name="next" class="btn next action-button" value="Tiếp theo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title mb-5">Mời bạn chọn dịch vụ</h2>
                                        @include('customer::booking.booking_service')
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Quay lại" />
                                    <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">

                                        <h2 class="fs-title mt-3">Chọn giờ cắt</h2>
                                        @include('customer::booking.booking_time')

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Quay lại" />
                                    <input type="button" name="make_payment" class="next action-button" value="Tiếp theo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Đặt lịch thành công !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <input type="submit" name="make_payment" class="next action-button" value="Xác nhận" />
                                                <a href="{{ route('customer.home') }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('client/js/booking.js') }}"></script>
@endpush
