@extends('admin::layouts.master')

@section('title', 'Danh sách salon')

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
                        <a href="{{ route('admin.salon.create') }}"
                            class="btn btn-primary float-right">Thêm mới</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên</th>
                                    <th>Địa chỉ</th>
                                    <th>Quản lý</th>
                                    <th>Giờ làm việc</th>
                                    <th>Số điện thoại</th>
                                    <th>Trạng thái</th>
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
                                            {{ $row->name }}
                                        </td>
                                        <td>
                                            {{ $row->address }}
                                        </td>
                                        <td>
                                            @foreach ($row->admin as $item)
                                                {{$item->name}}
                                            @endforeach
                                        </td>
                                        <td>
                                            Bắt đầu từ
                                            <b class="text-primary"> {{json_decode($row->work_time)->start}}</b>
                                            đến
                                            <b class="text-danger">{{ json_decode($row->work_time)->end }}</b>
                                        </td>
                                        <td>
                                            {{ $row->phone }}
                                        </td>
                                        <td>
                                            @if ($row->status == STATUS_ACCOUNT_CUSTOMER_REGISTER)
                                                <b class="text-warning">Chưa được kích hoạt</b>
                                            @elseif($row->status == STATUS_ACCOUNT_CUSTOMER_ACTIVE)
                                                <b class="text-success">Đang hoạt động</b>
                                            @else
                                                <b class="text-danger">Đang khóa</b>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.salon.show', [$row->id]) }}"
                                                    class="btn btn-app text-success">
                                                    <i class="fas fa-edit"></i> Cập nhật
                                                </a>
                                                <form
                                                    action="{{ route('admin.salon.destroy', [$row->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-app text-danger">
                                                        <i class="far fa-trash-alt"></i> Xóa
                                                    </button>
                                                </form>
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
