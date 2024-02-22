<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <div class="d-flex">
            @if (Route::has('login'))
                @auth
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg"
                                alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My
                                Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end">11</span><i
                                    class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" onclick="window.location.href='{{ url('/dashboard') }}'"
                            class="btn header-item noti-icon waves-effect">
                            <i class="mdi mdi-home-export-outline" aria-haspopup="true" aria-expanded="false"></i></button>
                    </div>
                @else
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-login-variant"></i>
                        </button>
                    </div>
                    @if (Route::has('register'))
                        <div class="dropdown d-inline-block">
                            <button type="button" onclick="window.location.href='{{ url('/register') }}'"
                                class="btn header-item noti-icon waves-effect">
                                <i class="mdi mdi-registered-trademark" aria-haspopup="true"
                                    aria-expanded="false"></i></button>
                        </div>
                    @endif
                @endauth
            @endif

        </div>
    </div>
</header>
