@extends('admin::layouts.master')

@section('title', 'Danh sách đánh giá')

@push('css')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endpush

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
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách - @yield('title')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (session('success'))
                            <p class="text-success"> {{session('success')}} </p>
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
                              @foreach ($data as $service)
                                    <tr>
                                    <td>1</td>
                                    <td>{{ $service->service->name }}</td>
                                    <td>{{ number_format($service->price, 0, ',', ' ') }} đ</td>
                                    <td>
                                        <a href="{{ route('admin.don-hang.restore', [$service->id]) }}"
                                            class="btn btn-app text-success">
                                            <i class="fas fa-trash-restore"></i> Khôi phục
                                        </a>
                                    </td>
                                    </tr>
                              @endforeach
                          </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('scripts')

@endpush
