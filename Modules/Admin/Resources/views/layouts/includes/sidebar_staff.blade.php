<li class="nav-item">
    <a href="{{ route('admin.dich-vu-salon.create') }}"
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Xác nhận đơn hàng</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.dich-vu-salon.create') }}"
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-minus"></i>
        <p>Lịch sử đặt lịch</p>
    </a>
</li>
