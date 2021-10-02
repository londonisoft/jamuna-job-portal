<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu" style="">
        <div class="pcoded-navigatio-lavel text-center" data-i18n="nav.category.navigation">
            <a href="">
                <!-- <img width="80x" src="{{ image_url(auth()->user()->image) }}" class="img-radius mb-2" alt="User-Profile-Image"><br> -->
                <span class="text-uppercase text-primary" >{{  auth()->user()->name }}</span>
            </a>
        </div>
        <hr>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="{{ url('/admin/home') }}">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
                <li>
                    <a href="{{ route('profile.index') }}">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Profile</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            <li>
                <a href="{{ route('posts.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Appication</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('posts-approve.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Approve Appication</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('posts-pending.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pending Appication</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('print-admit.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Print Admit</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('admin/setting') }}">
                    <span class="pcoded-micon"><i class="ti-settings"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Settings</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
