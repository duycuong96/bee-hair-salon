
<li class="nav-item">
    <a href="{{ route('admin.tai-khoan.salonListOfMe') }}"
        class="nav-link {{ request()->is('admin/danh-sach-salon-cua-ban') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Danh sách salon của bạn</p>
    </a>
</li>
<li class="nav-item">
    <a href=""
        class="nav-link {{ request()->is('admin/dich-vu-salon/create') ? 'active' : '' }}">
        <i class="nav-icon fab fa-usps"></i>
        <p>Thống kê doanh thu salon</p>
    </a>
</li>
