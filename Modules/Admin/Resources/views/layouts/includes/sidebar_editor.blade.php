<li class="nav-item has-treeview {{ request()->routeIs('admin.bai-viet*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.bai-viet*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Bài viết
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.index') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.create') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ request()->routeIs('admin.bai-viet*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.bai-viet*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Chuyên mục
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.index') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.create') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ request()->routeIs('admin.bai-viet*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->routeIs('admin.bai-viet*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>
            Bình luận
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.index') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.index') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.bai-viet.create') }}"
                class="nav-link {{ request()->routeIs('admin.bai-viet.create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>

