<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->email }}</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGASI</li>
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Content Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
                    <li><a href="#"><i class="fa fa-cubes"></i> Categories</a></li>
                    <li><a href="#"><i class="fa fa-newspaper"></i> Posts</a></li>
                    <li><a href="#"><i class="fa fa-lightbulb"></i> Tech Stack</a></li>
                    <li><a href="#"><i class="fa fa-project-diagram"></i> Portfolio Projects</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-chart-line"></i> <span>Analytics</span>
                </a>
            </li>

            <li class="header">SYSREM</li>
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i> <span>SETTINGS</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                    <i class="fa fa-sign-out-alt"></i> <span>Sing Out</span>
                </a>

                <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </section>
</aside>