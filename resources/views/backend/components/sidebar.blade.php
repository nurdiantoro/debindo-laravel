<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Debindo Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == '' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::segment(2) == 'partner' ? 'active' : '' }}">
        <a class="nav-link " href="{{ url('dashboard/partner') }}">
            <i class="fas fa-handshake"></i> <span>Partner</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'event' ? 'active' : '' }}">
        <a class="nav-link " href="{{ url('dashboard/event') }}">
            <i class="fas fa-calendar-alt"></i> <span>Event</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'news' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/news') }}">
            <i class="fas fa-newspaper"></i> <span>News</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'career' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/career') }}">
            <i class="fas fa-suitcase"></i> <span>Career</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'team' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/team') }}">
            <i class="fas fa-users"></i> <span>Team</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'inbox' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/inbox') }}">
            <i class="fas fa-comment-alt"></i> <span>Inbox</span></a>
    </li>
</ul>
