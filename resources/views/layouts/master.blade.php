<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">

    <title>Cowmes Admin</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <router-link to="/dashboard" class="brand-link">
                <img src="./img/logo.png" alt="cowmes logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Cowmes</span>
            </router-link>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <router-link to="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Dashboard
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/order" class="nav-link">
                                <i class="nav-icon fas fa-shopping-basket"></i>
                                <p>
                                    Order
                                </p>
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/payment" class="nav-link">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>
                                    Payment
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a class="nav-link ">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Employee
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/driver" class="nav-link">
                                        <i class="fas fa-car nav-icon"></i>
                                        <p>Driver</p>
                                    </router-link>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <router-link to="/profile" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Statistic
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    {{ __('Logout') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <router-view></router-view>
                    <vue-progress-bar></vue-progress-bar>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="/js/app.js"></script>
</body>

</html>