<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == '' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::segment(2) == 'partner' ? 'active' : '' }}">
        <a class="nav-link " href="{{ url('dashboard/partner') }}"> <span>Partner</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'event' ? 'active' : '' }}">
        <a class="nav-link " href="{{ url('dashboard/event') }}"> <span>Event</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'news' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/news') }}"> <span>News</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'career' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/career') }}"> <span>Career</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'team' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/team') }}"> <span>Team</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'inbox' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/inbox') }}"> <span>Inbox</span></a>
    </li>
</ul>
