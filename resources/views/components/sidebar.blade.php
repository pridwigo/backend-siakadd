<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">SIAKAD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">SKD</a>
        </div>
        <ul class="sidebar-menu">

            <li class="">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">User List</a>
                    </li>
                </ul>
            </li>


    </aside>
</div>
