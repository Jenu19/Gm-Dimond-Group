<header class="page-topbar">
    <div class="navbar-header">
        <div class="">
            <button class="navbar-toggler d-lg-none d-md-block px-md-4 px-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarcollapse">
                <i class="fa-solid fa-bars fs-4"></i>
            </button>
        </div>
        <div class="px-md-3 px-0 d-flex align-items-center">
            <div class="dropwdown d-inline-block">
                <button class="btn header-item" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url(env('ASSETPATHURL') . 'admin/images/placeholder.jpg') }}" alt="">
                    <span class="d-none d-xxl-inline-block d-xl-inline-block ms-1">{{ @Auth::user()->name }}</span>
                    <i class="fa-solid fa-angle-down d-none d-xxl-inline-block d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu box-shadow dropdown-menu-end">
                    <a class="dropdown-item d-flex align-items-center cursor-pointer"
                        onclick="logout('{{ route('admin.logout') }}')">
                        <i class="fa-solid fa-arrow-right-from-bracket mx-2"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
