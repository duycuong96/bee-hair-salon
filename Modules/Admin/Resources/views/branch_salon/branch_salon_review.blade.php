@extends('admin::layouts.master')

@section('title', 'Danh sách đánh giá của Salon')

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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên salon</th>
                                    <th>Tên khách hàng</th>
                                    <th>Mức độ đánh giá</th>
                                    <th>Nội dung đánh giá</th>
                                    <th>Ngày đánh giá</th>
                                    <th>Trang thái</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>
                                            {{ $row->id }}
                                        </td>
                                        <td>
                                            {{ $row->branchSalon->name }}
                                        </td>
                                        <td>
                                            {{ $row->customer->name }}
                                        </td>
                                        <td>
                                            <span
                                                class="fa fa-star {{ $row->rating_stars >= 1 ? 'text-warning' : '' }}"></span>
                                            <span
                                                class="fa fa-star {{ $row->rating_stars >= 2 ? 'text-warning' : '' }}"></span>
                                            <span
                                                class="fa fa-star {{ $row->rating_stars >= 3 ? 'text-warning' : '' }}"></span>
                                            <span
                                                class="fa fa-star {{ $row->rating_stars >= 4 ? 'text-warning' : '' }}"></span>
                                            <span
                                                class="fa fa-star {{ $row->rating_stars >= 5 ? 'text-warning' : '' }}"></span>
                                        </td>
                                        <td>
                                            {{ $row->detail }}
                                        </td>
                                        <td>
                                            {{ $row->created_at }}
                                        </td>
                                        <td>
                                            @if ($row->status == STATUS_ACCOUNT_CUSTOMER_REGISTER)
                                                <b class="text-warning">Chưa được xét duyệt</b>
                                            @elseif($row->status == STATUS_ACCOUNT_CUSTOMER_ACTIVE)
                                                <b class="text-success">Xét duyệt thành công</b>
                                            @else
                                                <b class="text-danger">Ẩn đánh giá</b>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.danh-gia.show', [$row->id]) }}"
                                                    class="btn btn-app text-success">
                                                    <i class="fas fa-edit"></i> Cập nhật
                                                </a>
                                            </div>
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
