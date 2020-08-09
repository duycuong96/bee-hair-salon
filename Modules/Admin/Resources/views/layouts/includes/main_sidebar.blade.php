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
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-grin"></i>
                        <p>
                            Quản lý khách hàng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Quản lý tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ (request()->is('admin/salon*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/salon*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Quản lý Salon
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{route('admin.salon.index')}}" class="nav-link {{ (request()->is('admin/salon')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách salon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.salon.create')}}" class="nav-link {{ (request()->is('admin/salon/create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm salon</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ (request()->routeIs('admin.phan-quyen*')) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ (request()->routeIs('admin.phan-quyen*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-drum-steelpan"></i>
                        <p>
                            Phân quyền tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.phan-quyen.index')}}" class="nav-link {{ (request()->routeIs('admin.phan-quyen.index')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.phan-quyen.create')}}" class="nav-link {{ (request()->routeIs('admin.phan-quyen.create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ (request()->routeIs('admin.vai-tro*')) ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ (request()->routeIs('admin.vai-tro*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>
                            Vai trò tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.vai-tro.index')}}" class="nav-link {{ (request()->routeIs('admin.vai-tro.index')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.vai-tro.create')}}" class="nav-link {{ (request()->routeIs('admin.vai-tro.create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
