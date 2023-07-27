<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        {{-- <img src="{{ URL('storage/images/icon-logo.png') }}" height="30"> --}}
        <div class="sidebar-brand-text mx-3"> SHOP</div>
    </a>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Chức năng </div>

    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    @if (Auth::user()->id_phan_quyen === '1')
        <li class="nav-item">
            <a class="nav-link" href="/admin/taikhoan">
                <i class="fas fa-user"></i>
                <span>Quản lý Tài khoản</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/gianhang">
                <i class="fas fa-trademark"></i>
                <span>Quản lý Gian hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/loai">
                <i class="fas fa-shoe-prints"></i>
                <span>Quản lý loại sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/phanquyen">
                <i class="fas fa-users"></i>
                <span>Quản lý Phân quyền</span>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="/admin/sanpham">
                <i class="fas fa-list"></i>
                <span>Quản lý sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/donhang">
                <i class="fas fa-cart-arrow-down"></i>
                <span>Xét duyệt Đơn hàng</span>
            </a>
        </li>
    @endif
    <br>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
