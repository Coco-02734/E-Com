<!-- top bar navigation -->
<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="index.html" class="logo">
            <span>RaskiStore Admin</span>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">


            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <span class="notif-bullet"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>
                            <small>
                                <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                        </h5>
                    </div>



                </div>
            </li>


            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                </a>

            </li>


            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url('assets/admin') ?>/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">
                            <small>Hello, <?= $user['nama']; ?></small>
                        </h5>
                    </div>

                    <!-- item-->
                    <a href="profile.html" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>Edit Profile</span>
                    </a>

                    <!-- item-->
                    <a href="<?= base_url('admin/auth/logout') ?>" class="dropdown-item notify-item">
                        <i class="fas fa-power-off"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fas fa-bars"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
<!-- End Navigation -->