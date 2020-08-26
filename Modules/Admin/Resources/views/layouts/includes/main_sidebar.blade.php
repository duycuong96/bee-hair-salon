<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">BeeHair Salon</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.tai-khoan.show', Auth::user()->id) }}">
                    @auth('admin')
                        {{ Auth::user()->name }}
                    @endauth
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                @can('Quản trị viên')
                    @include('admin::layouts.includes.sidebar_admin')
                @endcan

                @can('Biên tập viên')
                    @include('admin::layouts.includes.sidebar_editor')
                @endcan

                @can('Quản lý chi nhánh salon')
                    @include('admin::layouts.includes.sidebar_branch_salon')
                @endcan

                @can('Nhân viên salon')
                    @include('admin::layouts.includes.sidebar_staff')
                @endcan

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
