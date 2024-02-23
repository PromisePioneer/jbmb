
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Horizontal Topbar Light  | Veltrix - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('assets/libs/chartist/chartist.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

</head>


<body data-topbar="light" data-layout="horizontal">
<!-- Begin page -->
<div id="layout-wrapper">

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

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                                        <i class="mdi mdi-glass-cocktail"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top">

                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

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
                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My
                            Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                                class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i
                                class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i
                                class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-cog-outline"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                                <i class="ti-home me-2"></i>Dashboard
                            </a>
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                                <i class="ti-package me-2"></i>UI Elements
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-menu-start dropdown-mega-menu-xl"
                                 aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                            <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                            <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                            <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                            <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                            <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                            <a href="ui-images.html" class="dropdown-item">Images</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-lightbox.html" class="dropdown-item">Lightbox</a>
                                            <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                            <a href="ui-rangeslider.html" class="dropdown-item">Range Slider</a>
                                            <a href="ui-session-timeout.html" class="dropdown-item">Session Timeout</a>
                                            <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                            <a href="ui-sweet-alert.html" class="dropdown-item">SweetAlert 2</a>
                                            <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs & Accordions</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                            <a href="ui-video.html" class="dropdown-item">Video</a>
                                            <a href="ui-general.html" class="dropdown-item">General</a>
                                            <a href="ui-colors.html" class="dropdown-item">Colors</a>
                                            <a href="ui-rating.html" class="dropdown-item">Rating</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                <i class="ti-harddrives me-2"></i>Components
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email">
                                        Email <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                        <a href="email-read.html" class="dropdown-item">Email Read</a>
                                        <a href="email-compose.html" class="dropdown-item">Email Compose</a>
                                    </div>
                                </div>

                                <a href="calendar.html" class="dropdown-item">Calendar</a>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form">
                                        Forms <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements.html" class="dropdown-item">Form Elements</a>
                                        <a href="form-validation.html" class="dropdown-item">Form Validation</a>
                                        <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                        <a href="form-editors.html" class="dropdown-item">Form Editors</a>
                                        <a href="form-uploads.html" class="dropdown-item">Form File Upload</a>
                                        <a href="form-xeditable.html" class="dropdown-item">Form Xeditable</a>
                                        <a href="form-repeater.html" class="dropdown-item">Form Repeater</a>
                                        <a href="form-wizard.html" class="dropdown-item">Form Wizard</a>
                                        <a href="form-mask.html" class="dropdown-item">Form Mask</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart">
                                        Charts <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                        <a href="charts-morris.html" class="dropdown-item">Morris Chart</a>
                                        <a href="charts-chartist.html" class="dropdown-item">Chartist Chart</a>
                                        <a href="charts-chartjs.html" class="dropdown-item">Chartjs Chart</a>
                                        <a href="charts-flot.html" class="dropdown-item">Flot Chart</a>
                                        <a href="charts-knob.html" class="dropdown-item">Jquery Knob Chart</a>
                                        <a href="charts-sparkline.html" class="dropdown-item">Sparkline Chart</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table">
                                        Tables <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                        <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                        <a href="tables-responsive.html" class="dropdown-item">Responsive Tables</a>
                                        <a href="tables-editable.html" class="dropdown-item">Editable Tables</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons">
                                        Icons <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="icons-material.html" class="dropdown-item">Material Design</a>
                                        <a href="icons-fontawesome.html" class="dropdown-item">Font Awesome</a>
                                        <a href="icons-ion.html" class="dropdown-item">Ion Icons</a>
                                        <a href="icons-themify.html" class="dropdown-item">Themify Icons</a>
                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                        <a href="icons-typicons.html" class="dropdown-item">Typicons Icons</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map">
                                        Maps <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google.html" class="dropdown-item"> Google Map</a>
                                        <a href="maps-vector.html" class="dropdown-item"> Vector Map</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                                <i class="ti-archive me-2"></i> Authentication
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg" aria-labelledby="topnav-auth">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="pages-login.html" class="dropdown-item">Login 1</a>
                                            <a href="pages-register.html" class="dropdown-item">Register 1</a>
                                            <a href="pages-recoverpw.html" class="dropdown-item">Recover Password 1</a>
                                            <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen 1</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="pages-login-2.html" class="dropdown-item">Login 2</a>
                                            <a href="pages-register-2.html" class="dropdown-item">Register 2</a>
                                            <a href="pages-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                            <a href="pages-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-extrapages" role="button">
                                <i class="ti-support me-2"></i> Extra Pages
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg" aria-labelledby="topnav-extrapages">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-directory.html" class="dropdown-item">Directory</a>
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a>
                                            <a href="pages-faq.html" class="dropdown-item">Faq</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-emailtemplates" role="button">
                                <i class="ti-bookmark-alt me-2"></i>Email Templates
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-emailtemplates">
                                <a href="email-template-basic.html" class="dropdown-item">Basic Action Email</a>
                                <a href="email-template-alert.html" class="dropdown-item">Alert Email</a>
                                <a href="email-template-billing.html" class="dropdown-item">Billing Email</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                                <i class="ti-layout me-2"></i> Layouts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                       role="button">
                                        Vertical <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                        <a href="layouts-light-sidebar.html" class="dropdown-item">Light Sidebar</a>
                                        <a href="layouts-compact-sidebar.html" class="dropdown-item">Compact Sidebar</a>
                                        <a href="layouts-icon-sidebar.html" class="dropdown-item">Icon Sidebar</a>
                                        <a href="layouts-boxed.html" class="dropdown-item">Boxed Layout</a>
                                        <a href="layouts-colored-sidebar.html" class="dropdown-item">Colored Sidebar</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                       role="button">
                                        Horizontal <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                        <a href="layouts-horizontal.html" class="dropdown-item">Horizontal</a>
                                        <a href="layouts-hori-topbar-light.html" class="dropdown-item">Light Topbar</a>
                                        <a href="layouts-hori-boxed.html" class="dropdown-item">Boxed Layout</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Topbar Light</h6>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Veltrix</a></li>
                                <li class="breadcrumb-item"><a href="#">Horizontal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Topbar Light</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <div class="float-end d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-cog me-2"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="assets/images/services-icon/01.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                                    <h4 class="fw-medium font-size-24">1,685 <i
                                            class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                    <div class="mini-stat-label bg-success">
                                        <p class="mb-0">+ 12%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="assets/images/services-icon/02.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Revenue</h5>
                                    <h4 class="fw-medium font-size-24">52,368 <i
                                            class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                                    <div class="mini-stat-label bg-danger">
                                        <p class="mb-0">- 28%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="assets/images/services-icon/03.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Average Price</h5>
                                    <h4 class="fw-medium font-size-24">15.8 <i
                                            class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                    <div class="mini-stat-label bg-info">
                                        <p class="mb-0"> 00%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="assets/images/services-icon/04.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Product Sold</h5>
                                    <h4 class="fw-medium font-size-24">2436 <i
                                            class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                    <div class="mini-stat-label bg-warning">
                                        <p class="mb-0">+ 84%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Earning</h4>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div>
                                            <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-center">
                                                    <p class="text-muted mb-4">This month</p>
                                                    <h3>$34,252</h3>
                                                    <p class="text-muted mb-5">It will be as simple as in fact it
                                                        will be occidental.</p>
                                                    <span class="peity-donut"
                                                          data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                          data-width="72" data-height="72">4/5</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-center">
                                                    <p class="text-muted mb-4">Last month</p>
                                                    <h3>$36,253</h3>
                                                    <p class="text-muted mb-5">It will be as simple as in fact it
                                                        will be occidental.</p>
                                                    <span class="peity-donut"
                                                          data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                          data-width="72" data-height="72">3/5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title mb-4">Sales Analytics</h4>
                                </div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted">Online</p>
                                                <h5 class="mb-4">1,542</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                              data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                              data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted">Offline</p>
                                                <h5 class="mb-4">6,451</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                              data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                              data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted">Marketing</p>
                                                <h5>84,574</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                              data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                              data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Sales Report</h4>

                                <div class="cleafix">
                                    <p class="float-start"><i class="mdi mdi-calendar me-1 text-primary"></i> Jan 01
                                        - Jan 31</p>
                                    <h5 class="font-18 text-end">$4230</h5>
                                </div>

                                <div id="ct-donut" class="ct-chart wid"></div>

                                <div class="mt-4">
                                    <table class="table mb-0">
                                        <tbody>
                                        <tr>
                                            <td><span class="badge bg-primary">Desk</span></td>
                                            <td>Desktop</td>
                                            <td class="text-end">54.5%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-success">Mob</span></td>
                                            <td>Mobile</td>
                                            <td class="text-end">28.0%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-warning">Tab</span></td>
                                            <td>Tablets</td>
                                            <td class="text-end">17.5%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Activity</h4>
                                <ol class="activity-feed">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jan 22</span>
                                            <span class="activity-text">Responded to need “Volunteer
                                                        Activities”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jan 20</span>
                                            <span class="activity-text">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui deleniti atque...<a href="#"
                                                                                                    class="text-success">Read more</a></span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jan 19</span>
                                            <span class="activity-text">Joined the group “Boardsmanship
                                                        Forum”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jan 17</span>
                                            <span class="activity-text">Responded to need “In-Kind
                                                        Opportunity”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jan 16</span>
                                            <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                                        error sit rem.</span>
                                        </div>
                                    </li>
                                </ol>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="py-4">
                                            <i
                                                class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                            <h5 class="text-primary mt-4">Order Successful</h5>
                                            <p class="text-muted">Thanks you so much for your order.</p>
                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm">Chack Status</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-primary product-sale">
                                    <div class="card-body">
                                        <div class="text-center text-white py-4">
                                            <h5 class="mb-4 text-white-50 font-size-16">Top Product Sale</h5>
                                            <h1>1452</h1>
                                            <p class="font-size-14 pt-1">Computer</p>
                                            <p class="text-white-50 mb-0">At solmen va esser necessi far uniform
                                                myth... <a href="#" class="text-white">View more</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Client Reviews</h4>
                                        <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                            language would be desirable one could refuse to pay expensive
                                            translators it would be necessary. "</p>
                                        <div class="float-end mt-2">
                                            <a href="#" class="text-primary">
                                                <i class="mdi mdi-arrow-right h5"></i>
                                            </a>
                                        </div>
                                        <h6 class="mb-0"><img src="assets/images/users/user-3.jpg" alt=""
                                                              class="avatar-sm rounded-circle me-2"> James Athey</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transaction</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="2">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">#14256</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> Philip Smead
                                                </div>
                                            </td>
                                            <td>15/1/2018</td>
                                            <td>$94</td>
                                            <td><span class="badge bg-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14257</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-3.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> Brent Shipley
                                                </div>
                                            </td>
                                            <td>16/1/2019</td>
                                            <td>$112</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14258</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-4.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> Robert Sitton
                                                </div>
                                            </td>
                                            <td>17/1/2019</td>
                                            <td>$116</td>
                                            <td><span class="badge bg-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14259</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-5.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                                </div>
                                            </td>
                                            <td>18/1/2019</td>
                                            <td>$109</td>
                                            <td><span class="badge bg-danger">Cancel</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14260</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-6.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> David Sanchez
                                                </div>
                                            </td>
                                            <td>19/1/2019</td>
                                            <td>$120</td>
                                            <td><span class="badge bg-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14261</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt=""
                                                         class="avatar-xs rounded-circle me-2"> Philip Smead
                                                </div>
                                            </td>
                                            <td>15/1/2018</td>
                                            <td>$94</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Chat</h4>
                                <div class="chat-conversation">
                                    <ul class="conversation-list" data-simplebar style="max-height: 367px;">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-2.jpg"
                                                     class="avatar-xs rounded-circle" alt="male">
                                                <span class="time">10:00</span>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <span class="user-name">John Deo</span>
                                                    <p>
                                                        Hello!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg"
                                                     class="avatar-xs rounded-circle" alt="Female">
                                                <span class="time">10:01</span>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <span class="user-name">Smith</span>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-2.jpg"
                                                     class="avatar-xs rounded-circle" alt="male">
                                                <span class="time">10:04</span>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <span class="user-name">John Deo</span>
                                                    <p>
                                                        Yeah everything is fine
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg"
                                                     class="avatar-xs rounded-circle" alt="male">
                                                <span class="time">10:05</span>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <span class="user-name">Smith</span>
                                                    <p>
                                                        Wow that's great
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg"
                                                     class="avatar-xs rounded-circle" alt="male">
                                                <span class="time">10:08</span>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <span class="user-name mb-2">Smith</span>

                                                    <img src="assets/images/small/img-1.jpg" alt="" height="48"
                                                         class="rounded me-2">
                                                    <img src="assets/images/small/img-2.jpg" alt="" height="48"
                                                         class="rounded">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-sm-9 col-8 chat-inputbar">
                                            <input type="text" class="form-control chat-input"
                                                   placeholder="Enter your text">
                                        </div>
                                        <div class="col-sm-3 col-4 chat-send">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-success">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © <script>document.write(new Date().getFullYear())</script> Veltrix<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css"
                       data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>
            <div class="d-grid">
                <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- Peity chart-->
<script src="{{ asset('assets/libs/peity/jquery.peity.min.js')}}"></script>

<!-- Plugin Js-->
<script src="{{ asset('assets/libs/chartist/chartist.min.js')}}"></script>
<script src="{{ asset('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>

</body>
</html>
