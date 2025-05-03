<!-- For Large Devices -->
<nav class="sidebar sidebar-lg">
    <div class="d-flex justify-content-center align-items-center mb-3 border-bottom border-white">
        <div class="navbar-header-logo pb-2">
            <h4 class="text-white m-0">Admin</h4>
        </div>
    </div>
    @include('admin.layout.sidebarcontent')
</nav>
<!-- For Small Devices -->
<nav class="offcanvas offcanvas-start sidebar sidebar-md p-0" id="sidebarcollapse">
    <div class="offcanvas-header border-bottom border-white">
        <h4 class="text-white m-0 p-0">Admin</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body overflow-hidden">
        @include('admin.layout.sidebarcontent')
    </div>
</nav>
