<style>
    .sidebar .navbar-nav .nav-item .nav-link i {
        -webkit-box-flex: 0;
        flex: 0 0 1.5rem;
        -ms-flex: 0 0 1.5rem;
    }

    .sidebar .navbar-nav .nav-item .multimenu-menu-indicator i {
        -webkit-box-flex: 0;
        flex: 0 0 1rem;
        -ms-flex: 0 0 1rem;
        font-size: 6px;
    }
</style>
<ul class="navbar-nav">
    <li class="nav-item mb-2 fs-7">
        <a class="nav-link rounded d-flex align-items-center {{ request()->routeIs('admin.blog*') ? 'active' : '' }}"
            href="{{ route('admin.blog.index') }}" aria-expanded="false">
            <i class="fa-solid fa-blog"></i><span class="nav-text">Blog</span>
        </a>
    </li>
    <li class="nav-item mb-2 fs-7">
        <a class="nav-link rounded d-flex align-items-center {{ request()->routeIs('admin.pioneers*') ? 'active' : '' }}"
            href="{{ route('admin.pioneers.index') }}" aria-expanded="false">
            <i class="fa-solid fa-image"></i><span class="nav-text">Pioneers/Preferred</span>
        </a>
    </li>
    <li class="nav-item mb-2 fs-7">
        <a class="nav-link rounded d-flex align-items-center {{ request()->routeIs('admin.event*') ? 'active' : '' }}"
            href="{{ route('admin.event.index') }}" aria-expanded="false">
            <i class="fa-solid fa-image"></i><span class="nav-text">Media/Events</span>
        </a>
    </li>
    <li class="nav-item mb-2 fs-7">
        <a class="nav-link rounded d-flex align-items-center {{ request()->routeIs('admin.job_opening*') ? 'active' : '' }}"
            href="{{ route('admin.job_opening.index') }}" aria-expanded="false">
            <i class="fa-solid fa-tasks"></i><span class="nav-text">Job Opening</span>
        </a>
    </li>
    <li class="nav-item mb-2 fs-7">
        <a class="nav-link rounded d-flex align-items-center" href="{{ route('admin.clearcache') }}"
            aria-expanded="false">
            <i class="fa fa-refresh"></i><span class="nav-text">Clear Cache</span>
        </a>
    </li>
</ul>
