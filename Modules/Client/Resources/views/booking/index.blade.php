@extends('client::layouts.master')

@section('title', 'BeeHair')

    @push('css')

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset('client/css/booking.css') }}">

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
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Chọn salon</strong></li>
                                    <li id="personal"><strong>Chọn dịch vụ</strong></li>
                                    <li id="payment"><strong>Chọn thời gian</strong></li>
                                    <li id="confirm"><strong>Hoàn tất</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset class="">
                                    <div class="form-card box-salon">
                                        <h2 class="fs-title">Chọn salon bạn muốn đặt lịch</h2>
                                        <select class="list-salon">
                                            <option selected>Chọn tỉnh/thành phố</option>
                                            <option>Hà Nội</option>
                                            <option>Thành phố HCM</option>
                                        </select>
                                        <select class="list-salon two">
                                            <option selected>Chọn quận/huyện</option>
                                            <option>Hoàn Kiếm</option>
                                            <option>Thủ Đức</option>
                                        </select>

                                        <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="https://storage.30shine.com/salon_image/front/139.png"
                                                        class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Salon Trần Hữu Dực</h5>
                                                        <p class="card-text">123, Trần Hữu Dực, Mỹ Đình, Hà Nội.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="https://storage.30shine.com/salon_image/front/139.png"
                                                        class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Salon Trung Kính</h5>
                                                        <p class="card-text">68, Trung Kính, Yên Hòa, Cầu Giấy, Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="https://storage.30shine.com/salon_image/front/139.png"
                                                        class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Salon Nguyễn Trãi</h5>
                                                        <p class="card-text">99, Nguyễn Trãi, Thanh Xuân, Hà Nội.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="btn next action-button" value="Tiếp theo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Mời bạn chọn dịch vụ</h2>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio mb-3">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                    name="customRadio">
                                                    <label for="customRadio1" class="custom-control-label">
                                                        <h4>Cắt tóc</h4>
                                                        <div class="box-service">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="ser-money">
                                                                        <p>Giá dịch vụ: <br> 100k</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="ser-time">
                                                                        <p>Thời gian làm dịch vụ:<br>1h</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg"
                                                                        alt="" class="ser-image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                    name="customRadio">
                                                <label for="customRadio2" class="custom-control-label">
                                                    <h4>Gội đầu</h4>
                                                    <div class="box-service">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="ser-money">
                                                                    <p>Giá dịch vụ: <br> 100k</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="ser-time">
                                                                    <p>Thời gian làm dịch vụ:<br>1h</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg"
                                                                    alt="" class="ser-image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>

                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio">
                                                <label for="customRadio3" class="custom-control-label">
                                                    <h4>Cắt tóc</h4>
                                                    <div class="box-service">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="ser-money">
                                                                    <p>Giá dịch vụ: <br> 100k</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="ser-time">
                                                                    <p>Thời gian làm dịch vụ:<br>1h</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg"
                                                                    alt="" class="ser-image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Quay lại" />
                                    <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">

                                        <h2 class="fs-title mt-3">Chọn giờ cắt</h2>
                                        <div class="pick-date">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="col-md-4 date-item active">
                                                    <a href="#homnay" aria-controls="homnay" role="tab" data-toggle="tab">
                                                        <div class="name-day">Hôm nay</div>
                                                        <span> Thứ Sáu 10/07</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" class="col-md-4 date-item">
                                                    <a href="#ngaymai" aria-controls="ngaymai" role="tab" data-toggle="tab">
                                                        <div class="name-day">Ngày mai</div>
                                                        <span> Thứ Bảy 11/07</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" class="col-md-4 date-item">
                                                    <a href="#ngaykia" aria-controls="ngaykia" role="tab" data-toggle="tab">
                                                        <div class="name-day">Ngày kia</div>
                                                        <span> Chủ Nhật 12/07</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="homnay">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadio8" name="customRadio">
                                                            <label for="customRadio8" class="custom-control-label">8h00 - 9h00
                                                            </label>
                                                            <span class="not-free cl-white br-4">Hết chỗ</span>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadio7" name="customRadio" checked="">
                                                            <label for="customRadio7"
                                                                class="custom-control-label">9h00 - 10h00</label>
                                                            <span class="not-free cl-white br-4 text-right">Hết chỗ</span>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio"
                                                                id="customRadio9"  name="customRadio" >
                                                            <label for="customRadio9"
                                                                class="custom-control-label">10h00 - 11h00</label>
                                                            <span class="not-free cl-white br-4 text-right">Hết chỗ</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="ngaymai">ngày mai</div>
                                                <div role="tabpanel" class="tab-pane" id="ngaykia">ngày kia</div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Quay lại" />
                                    <input type="button" name="make_payment" class="next action-button" value="Xác nhận" />
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
