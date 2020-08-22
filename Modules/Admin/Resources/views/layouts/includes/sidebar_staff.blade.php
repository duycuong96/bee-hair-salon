<li class="nav-item">
    <a href="{{ route('admin.order.confirm_order') }}"
        class="nav-link {{ request()->is('admin/don-hang-xac-nhan') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Xác nhận đơn hàng</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.order.history') }}"
        class="nav-link {{ request()->is('admin/don-hang-lich-su') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-minus"></i>
        <p>Lịch sử đặt lịch</p>
    </a>
</li>
