<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('#') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">techinnomind</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                        User-list

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('user.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>

                        <p>
                         webpage

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <button class="btn btn-primary">Logout</button>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
