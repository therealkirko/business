<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">Nik Patel</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                    <span>Support</span>
                </a>

                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item notify-item">
                        <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title">Apps</li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Clients </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Staff </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Invoices </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Projects </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Tasks </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Leads </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span> Reports </span>
                    </a>
                </li>
                <li class="menu-title">Setup</li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false">
                        <i data-feather="settings"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('roles_and_permissions') }}">Roles & Permissions</a>
                        </li>
                        <li>
                            <a href="#">Company</a>
                        </li>
                        <li>
                            <a href="#">Departments</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>