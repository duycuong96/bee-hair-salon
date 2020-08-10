@extends('client::layouts.master')

@section('title','BeeHair')

@push('css')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="{{asset('client/css/booking.css')}}">

@endpush

@section('content')

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
  <div class="row justify-content-center mt-0">
      <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-5 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <h2><strong>Sign Up Your User Account</strong></h2>
              <p>Fill all form field to go to next step</p>
              <div class="row">
                  <div class="col-md-12 mx-0">
                      <form id="msform">
                          <!-- progressbar -->
                          <ul id="progressbar">
                              <li class="active" id="account"><strong>Chọn salon</strong></li>
                              <li id="personal"><strong>Chọn dịch vụ</strong></li>
                              <li id="payment"><strong>Chọn stylist</strong></li>
                              <li id="confirm"><strong>Hoàn tất</strong></li>
                          </ul> <!-- fieldsets -->
                          <fieldset class="">
                              <div class="form-card box-salon">
                                  <h2 class="fs-title">Chọn salon bạn muốn đặt lịch</h2>
                                  <select class="list-salon">
                                    <option selected>Chọn tỉnh/thành phố</option>
                                    <option >Hà Nội</option>
                                    <option >Thành phố HCM</option>
                                  </select> 
                                  <select class="list-salon two">
                                    <option selected>Chọn quận/huyện</option>
                                    <option >Hoàn Kiếm</option>
                                    <option >Thủ Đức</option>
                                  </select> 

                                  <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                      <div class="col-md-4">
                                        <img src="https://storage.30shine.com/salon_image/front/139.png" class="card-img" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                      <div class="col-md-4">
                                        <img src="https://storage.30shine.com/salon_image/front/139.png" class="card-img" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card my-3 border p-2 box-salon" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                      <div class="col-md-4">
                                        <img src="https://storage.30shine.com/salon_image/front/139.png" class="card-img" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div> 
                              <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title">Mời anh chọn dịch vụ</h2>
                                    <div class="form-group">
                            
                                        <div class="custom-control custom-radio mb-3">
                                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                          <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                                          <div class="box-service">
                                            <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                            <div class="ser-money">Giá dịch vụ <br> 100k</div>
                                            <div class="ser-time">Thời gian làm dịch vụ<br>1h</div>
                                          </div>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" >
                                          <label for="customRadio2" class="custom-control-label">Custom Radio </label>
                                          <div class="box-service">
                                            <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                            <div class="ser-money">Giá dịch vụ <br> 100k</div>
                                            <div class="ser-time">Thời gian làm dịch vụ<br>1h</div>
                                          </div>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input class="custom-control-input" type="radio" id="customRadio3" >
                                          <label for="customRadio3" class="custom-control-label">Custom Radio </label>
                                          <div class="box-service">
                                            <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                            <div class="ser-money">Giá dịch vụ <br> 100k</div>
                                            <div class="ser-time">Thời gian làm dịch vụ<br>1h</div>
                                          </div>
                                        </div>
                                    </div>
                              </div> 
                              <input type="button" name="previous" class="previous action-button-previous" value="Quay lại" /> 
                              <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title">Chọn stylist</h2>
                                  
                                  <div class="custom-control custom-radio mb-3">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                    <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                                    <div class="box-service">
                                      <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                      <div class="ser-money">Name Stylist</div>
                                      
                                    </div>
                                  </div>
                                  <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" >
                                    <label for="customRadio2" class="custom-control-label">Custom Radio </label>
                                    <div class="box-service">
                                      <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                      <div class="ser-money">Name Stylist</div>
                                      
                                    </div>
                                  </div>
                                  <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio3" >
                                    <label for="customRadio3" class="custom-control-label">Custom Radio </label>
                                    <div class="box-service">
                                      <img src="https://i.pinimg.com/564x/3b/99/89/3b9989d995daca4a801ef91a50f889e7.jpg" alt="" class="ser-image">
                                      <div class="ser-money">Name Stylist</div>
                                    </div>
                                  </div>
                                  
                                  <h2 class="fs-title mt-3">Chọn ngày giờ</h2>
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
                                              <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                              <label for="customRadio1" class="custom-control-label">8h30
                                                
                                              </label>
                                              <span class="not-free cl-white br-4">Hết chỗ</span>
                                            </div>
                                            <div class="custom-control custom-radio">
                                              <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                                              <label for="customRadio2" class="custom-control-label">9h00</label>
                                              <span class="not-free cl-white br-4">Hết chỗ</span>
                                            </div>
                                            <div class="custom-control custom-radio">
                                              <input class="custom-control-input" type="radio" id="customRadio3" disabled="">
                                              <label for="customRadio3" class="custom-control-label">9h30</label>
                                              <span class="not-free cl-white br-4">Hết chỗ</span>
                                            </div>
                                          </div>
                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="ngaymai">ngày mai</div>
                                        <div role="tabpanel" class="tab-pane" id="ngaykia">ngày kia</div>
                                    </div>
                                </div>

                              </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title text-center">Success !</h2> <br><br>
                                  <div class="row justify-content-center">
                                      <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                  </div> <br><br>
                                  <div class="row justify-content-center">
                                      <div class="col-7 text-center">
                                          <h5>You Have Successfully Signed Up</h5>
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
  <script src="{{asset('client/js/booking.js')}}"></script>
@endpush