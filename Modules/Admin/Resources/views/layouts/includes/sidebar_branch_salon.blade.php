<li class="nav-item">
    <a href="{{ route('admin.dich-vu-salon.create') }}"
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Đăng ký dịch vụ</p>
    </a>
</li>
<li class="nav-item has-treeview {{ request()->routeIs('admin.vai-tro*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.vai-tro*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Cập nhập số ghế
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.tai-khoan.salonListOfMe') }}"
        class="nav-link {{ request()->is('admin/danh-sach-salon-cua-ban') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Danh sách salon của bạn</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.dich-vu-salon.create') }}"
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Thống kê doanh thu salon</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.dich-vu-salon.create') }}"
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Xem đánh giá</p>
    </a>
</li>
