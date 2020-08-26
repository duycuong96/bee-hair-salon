<li class="nav-item">
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item has-treeview {{ request()->routeIs('admin.khach-hang*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.khach-hang.index') }}" class="nav-link {{ request()->routeIs('admin.khach-hang*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-grin"></i>
        <p>
            Quản lý khách hàng
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.khach-hang.index') }}"
                class="nav-link {{ request()->routeIs('admin.khach-hang.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.khach-hang.create') }}"
                class="nav-link {{ request()->routeIs('admin.khach-hang.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.tai-khoan*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.tai-khoan.index') }}" class="nav-link {{ request()->routeIs('admin.tai-khoan*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Quản lý tài khoản
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.tai-khoan.index') }}"
                class="nav-link {{ request()->routeIs('admin.tai-khoan.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.tai-khoan.create') }}"
                class="nav-link {{ request()->routeIs('admin.tai-khoan.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->is('admin/salon*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.salon.index') }}" class="nav-link {{ request()->is('admin/salon*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-store"></i>
        <p>
            Quản lý Salon
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ">
        <li class="nav-item">
            <a href="{{ route('admin.salon.index') }}"
                class="nav-link {{ request()->is('admin/salon') ? 'active' : '' }}">
                <i class="fas fa-list-ol nav-icon"></i>
                <p>Danh sách salon</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.salon.create') }}"
                class="nav-link {{ request()->is('admin/salon/create') ? 'active' : '' }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm salon</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ request()->is('admin/danh-gia*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.danh-gia.index') }}" class="nav-link {{ request()->is('admin/danh-gia*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-pen"></i>
        <p>
            Quản lý đánh giá
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ">
        <li class="nav-item">
            <a href="{{ route('admin.danh-gia.index') }}"
                class="nav-link {{ request()->is('admin/danh-gia') ? 'active' : '' }}">
                <i class="fas fa-list-ol nav-icon"></i>
                <p>Danh sách đánh giá</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ request()->routeIs('admin.banner*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.banner.index') }}" class="nav-link {{ request()->routeIs('admin.banner*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Quản lý banner
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.banner.index') }}"
                class="nav-link {{ request()->routeIs('admin.banner.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.banner.create') }}"
                class="nav-link {{ request()->routeIs('admin.banner.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ request()->is('admin/dich-vu*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ request()->is('admin/dich-vu*') ? 'active' : '' }}">
        <i class="nav-icon fab fa-servicestack"></i>
        <p>
            Quản lý dịch vụ
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ">
        <li class="nav-item">
            <a href="{{ route('admin.dich-vu.index') }}"
                class="nav-link {{ request()->is('admin/dich-vu') ? 'active' : '' }}">
                <i class="fas fa-list-ol nav-icon"></i>
                <p>Danh sách dịch vụ</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.dich-vu.create') }}"
                class="nav-link {{ request()->is('admin/dich-vu/create') ? 'active' : '' }}">
                <i class="fas fa-plus-circle nav-icon"></i>
                <p>Thêm dịch vụ</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.lien-he*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.lien-he.index') }}" class="nav-link {{ request()->routeIs('admin.lien-he*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Quản lý liên hệ
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.lien-he.index') }}"
                class="nav-link {{ request()->routeIs('admin.lien-he.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.thong-ke*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.thong-ke*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Thống kê
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.thong-ke.khach.hang') }}"
                class="nav-link {{ request()->routeIs('admin.thong-ke.khach.hang') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thống kê khách hàng</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.thong-ke.doanh-thu') }}"
                class="nav-link {{ request()->routeIs('admin.thong-ke.doanh-thu') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Doanh thu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.thong-ke.dich-vu') }}"
                class="nav-link {{ request()->routeIs('admin.thong-ke.dich-vu') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dịch vụ</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.don-hang*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.don-hang*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Đơn đặt lịch
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.don-hang.index') }}"
                class="nav-link {{ request()->routeIs('admin.don-hang.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.thoi-gian-bieu*') ? 'menu-open' : '' }}">
    <a href="{{ route('admin.thoi-gian-bieu.index') }}" class="nav-link {{ request()->routeIs('admin.thoi-gian-bieu*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-grin"></i>
        <p>
            Thời gian biểu
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.thoi-gian-bieu.index') }}"
                class="nav-link {{ request()->routeIs('admin.thoi-gian-bieu.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.thoi-gian-bieu.create') }}"
                class="nav-link {{ request()->routeIs('admin.thoi-gian-bieu.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>

