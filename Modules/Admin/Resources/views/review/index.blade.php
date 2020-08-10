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
                        {{-- <a href="{{ route('admin.salon.create') }}"
                            class="btn btn-primary float-right">Thêm mới</a> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên salon</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tên nhân viên</th>
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
                                            {{ $row->salon_id }}
                                        </td>
                                        <td>
                                            {{ $row->customer_id }}
                                        </td>
                                        <td>
                                            {{ $row->employee_id }}
                                        </td>
                                        <td>
                                            {{ $row->rating_stars }}
                                        </td>
                                        <td>
                                            {{ $row->detail }}
                                        </td>
                                        <td>
                                            {{ $row->created_at }}
                                        </td>
                                        <td>
                                            {{ $row->status }}
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


    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "paging": true,
                "language": {
                    "decimal": "",
                    "emptyTable": "No data available in table",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "Showing 0 to 0 of 0 entries",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Danh sách: _MENU_",
                    "loadingRecords": "Loading...",
                    "processing": "Processing...",
                    "search": "Tìm kiếm:",
                    "zeroRecords": "No matching records found",
                    "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": ">>",
                        "previous": "<<"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endpush