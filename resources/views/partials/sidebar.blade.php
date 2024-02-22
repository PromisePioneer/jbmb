<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Main</li>

        @if (auth()->check())
            @if (auth()->user()->hasRole('admin'))
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="waves-effect {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-flickr"></i>
                        <span>Tawaran</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('status') }}"
                        class="waves-effect {{ request()->routeIs('status') ? 'active' : '' }}">
                        <i class="ti-info"></i>
                        <span>Status</span>
                    </a>
                </li>
            @elseif (auth()->user()->hasRole('seller'))
                <li>
                    <a href="{{ route('dashboard.seller') }}"
                        class="waves-effect {{ request()->routeIs('dashboard.seller') ? 'active' : '' }}">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="javascript: void(0);"
                    class="has-arrow waves-effect {{ request()->routeIs('jenis') || request()->routeIs('kondisi') || request()->routeIs('motor') ? 'mm-active' : '' }}">
                    <i class="ti-layout-list-thumb"></i>
                    <span>Motor</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    @if (auth()->user()->hasRole('admin'))
                        <li class="{{ request()->routeIs('jenis') ? 'active' : '' }}"><a
                                href="{{ route('jenis') }}">Jenis
                                Motor
                            </a></li>
                        <li class="{{ request()->routeIs('kondisi') ? 'active' : '' }}"><a
                                href="{{ route('kondisi') }}">Kondisi
                                Motor</a></li>
                    @endif
                    @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('seller'))
                        <li class="{{ request()->routeIs('motor') ? 'active' : '' }}"><a
                                href="{{ route('motor') }}">List
                                Motor</a></li>
                    @endif
                </ul>
            </li>
        @endif
    </ul>
</div>
