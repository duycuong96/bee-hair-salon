@extends('admin::layouts.master')

@section('title', 'Tài khoản')

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
                            <a href="{{ route('admin.tai-khoan.create') }}" class="btn btn-primary float-right">Thêm
                                mới</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body row">
                            @foreach ($data as $row)
                                    <div class="card col-3">
                                        <img class="card-img-top" src="http://127.0.0.1:8000/storage/service/0pmqfGcsmor2muSkGZFY9GqTQtlpGwT3sjYUWPsB.jpeg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Salon: {{$row->name}}</h5>
                                            <p class="card-text">
                                                Trạng thái:
                                                @if ($row->status == STATUS_ACCOUNT_CUSTOMER_REGISTER)
                                                    <b class="text-warning"> Chưa được kích hoạt</b>
                                                @elseif($row->status == STATUS_ACCOUNT_CUSTOMER_ACTIVE)
                                                    <b class="text-success"> Đang hoạt động</b>
                                                @else
                                                <b class="text-danger"> Đang khóa</b>
                                                @endif</p>

                                            <a href="{{ route('admin.salon.salonListCustomer', $row->id) }}" class="btn btn-primary btn-block mt-2">
                                                <i class="fas fa-users"></i> Danh sách khách hàng
                                            </a>
                                            <a href="{{ route('admin.salon.salonListReview', $row->id) }}" class="btn btn-primary btn-block mt-2">
                                                <i class="fas fa-edit"></i> Danh sách bình luận
                                            </a>
                                            <a href="{{ route('admin.dich-vu-salon.registerService', $row->id) }}" class="btn btn-primary btn-block mt-2">
                                                <i class="fab fa-usps"></i> Đăng ký dịch vụ salon
                                            </a>
                                            <a href="{{ route('admin.dich-vu-salon.updateSalon', $row->id) }}" class="btn btn-primary btn-block mt-2">
                                                <i class="fas fa-store-alt"></i> Cập nhật thông tin salon
                                            </a>

                                        </div>
                                    </div>
                            @endforeach
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
        // $(function() {
        //     $("#example1").DataTable({
        //         "responsive": true,
        //         "autoWidth": false,
        //         "paging": true,
        //         "language": {
        //             "decimal": "",
        //             "emptyTable": "No data available in table",
        //             "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        //             "infoEmpty": "Showing 0 to 0 of 0 entries",
        //             "infoFiltered": "(filtered from _MAX_ total entries)",
        //             "infoPostFix": "",
        //             "thousands": ",",
        //             "lengthMenu": "Danh sách: _MENU_",
        //             "loadingRecords": "Loading...",
        //             "processing": "Processing...",
        //             "search": "Tìm kiếm:",
        //             "zeroRecords": "No matching records found",
        //             "paginate": {
        //                 "first": "First",
        //                 "last": "Last",
        //                 "next": ">>",
        //                 "previous": "<<"
        //             },
        //             "aria": {
        //                 "sortAscending": ": activate to sort column ascending",
        //                 "sortDescending": ": activate to sort column descending"
        //             }
        //         }
        //     });
        //     $('#example2').DataTable({
        //         "paging": true,
        //         "lengthChange": false,
        //         "searching": false,
        //         "ordering": true,
        //         "info": true,
        //         "autoWidth": false,
        //         "responsive": true,
        //     });
        // });

    </script>
@endpush
