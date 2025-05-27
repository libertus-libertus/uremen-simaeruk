<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <span class="logo-mini"><b>US</b></span>
        <span class="logo-lg"><b>Uremen</b> Simaeruk</span>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle -->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Right navbar -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages -->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Anda memiliki 4 pesan</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" style="width:40px; height:40px;">
                                        </div>
                                        <h4>
                                            Tim Dukungan
                                            <small><i class="fa fa-clock-o"></i> 5 menit lalu</small>
                                        </h4>
                                        <p>Mengapa tidak membeli tema baru yang luar biasa?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Lihat Semua Pesan</a></li>
                    </ul>
                </li>

                <!-- User Info -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image in menu -->
                        <li class="user-header">
                            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::user()->name }}
                                <small>Bergabung sejak {{ Auth::user()->created_at->format('M Y') }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>