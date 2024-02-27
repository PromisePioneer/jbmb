<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('tawaran') }}" class=" waves-effect">
                        <i class="ion-ios-cash"></i>
                        <span>Tawaran</span>
                    </a>
                </li>
                <li class="menu-title">Master Data</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-menu-alt"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('jenis') }}">Jenis</a></li>
                        <li><a href="{{ url('kondisi') }}">Kondisi</a></li>
                        <li><a href="{{ url('motor') }}">Motor</a></li>
                    </ul>
                </li>

                <li class="menu-title">Transaksi</li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
