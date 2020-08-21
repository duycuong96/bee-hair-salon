@extends('admin::layouts.master')

@section('title', 'Chi tiết đánh giá')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@yield('title')</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">


        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-shopping-cart"></i> Đơn hàng
                <small class="float-right">{{ date_format($order->created_at," H:i:s d/mY") }}</small>
              </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>{{$order->customer->name}}</strong><br>
                {{ $customer->address }}<br>
                San Francisco, CA 94107<br>
                Phone: {{ $customer->phone }}<br>
                Email: {{ $customer->email }}
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>{{ $salon->name }}</strong><br>
                {{ $salon->address }}<br>
                San Francisco, CA 94107<br>
                Phone: {{ $salon->phone }}<br>
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Đơn hàng #{{ $order->id }}</b><br>
              <br>
              <b>Order ID:</b> 4F3S8J<br>
              <b>Payment Due:</b> 2/22/2014<br>
              <b>Account:</b> 968-34567
              <br><a class="btn btn-danger" href="{{ route('admin.don-hang.listSoftDelete', $order->id) }}">Dịch vụ đã xóa</a>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
                @if (session('delete'))
                    <p class="text-success"> {{session('delete')}} </p>
                @endif
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên dịch vụ</th>
                  <th>Giá tiền #</th>
                  <th>Active</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($listServiceOrders as $service)
                        <tr>
                        <td>1</td>
                        <td>{{ $service->service->name }}</td>
                        <td>{{ number_format($service->price, 0, ',', ' ') }} đ</td>
                        <td>
                            <form
                                action="{{ route('admin.don-hang.destroy', [$service->id]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-app text-danger">
                                    <i class="far fa-trash-alt"></i> Xóa
                                </button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Thêm dịch vụ</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <p class="alert alert-danger">{{session('error')}}</p>
                        @elseif (session('success'))
                            <p class="alert alert-success">{{session('success')}}</p>
                        @endif
                        <form action="{{ route('admin.don-hang.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="order_id" value=" {{$order->id}} ">
                                <label>Tên dịch vụ:</label>
                                    <select class="form-control" name="service_id">
                                    <option disabled selected> --- Chọn dịch vụ --- </option>
                                    @foreach ($services as $service)
                                        <option value=" {{ $service->id }} ">{{$service->name}}</option>
                                    @endforeach
                                    </select>
                                @error('service_id')
                                    <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            <div class="form-group d-flex justify-content-center">
                                <a href="{{ route('admin.dich-vu.index') }}"
                                    class="btn btn-lg btn-default mr-3">Trở lại</a>
                                <button type="submit" class="btn btn-lg btn-primary">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <p class="lead">Ngày 2/22/2014</p>

              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Tổng giá tiền:</th>
                    <td>$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-12">
              <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
              <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                Payment
              </button>
              <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                <i class="fas fa-download"></i> Generate PDF
              </button>
            </div>
          </div>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('scripts')

@endpush
