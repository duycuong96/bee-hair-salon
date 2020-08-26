@extends('admin::layouts.master')

@section('title', 'Thêm quản lý salon')

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
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <p class="text-success">{{session('success')}}</p>
                    @else
                        <p class="text-danger">{{session('error')}}</p>
                    @endif
                    <div class="form-group">
                        <label>Tên salon: {{ $salon->name }} </label>
                        <input type="hidden" class="form-control" name="name" value="{{ $salon->id }}">
                        @error('name')
                        <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Chức vụ</th>
                                    <th>Trạng thái</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>
                                            {{ $row->id }}
                                        </td>
                                        <td>
                                            {{ $row->name }}
                                        </td>
                                        <td>
                                            {{ $row->email }}
                                        </td>
                                        <td>
                                            @foreach($row->roles()->pluck('name') as $role)
                                                <span class="badge badge-info">{{ $role }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($row->status == STATUS_ACCOUNT_ADMIN_NOT_ACTIVE)
                                                <b class="text-warning">Chưa được kích hoạt</b>
                                            @elseif($row->status == STATUS_ACCOUNT_ADMIN_ACTIVE)
                                                <b class="text-success">Đã kích hoạt</b>
                                            @else
                                            <b class="text-danger">Đang khóa</b>
                                            @endif
                                        </td>
                                        <td class="btn-group">
                                            <form
                                                action="{{ route('admin.salon.postCreateManagerSalon', [$row->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" class="form-control" name="salon_id" value="{{ $salon->id }}">
                                                <input type="hidden" class="form-control" name="admin_id" value="{{ $row->id }}">
                                                <button type="submit" class="btn btn-app text-primary">
                                                    <i class="fas fa-plus"></i>Thêm
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection

@push('scripts')

@endpush
