<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">KAJAK</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KJ</a>
        </div>
        <ul class="sidebar-menu">
            {{-- @if (auth()->user()->role == 'admin')
                <li class="menu-header">Dashboard</li>
                <li class="{{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/home') }}">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endif --}}

            <li class="menu-header">Master Data</li>
            <li class="{{ Request::is('exam') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/exam') }}">
                    <i class="fas fa-edit"></i>
                    <span>Soal</span>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="{{ str_contains(Request::fullUrl(), 'user?type=teacher') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/user') }}?type=teacher">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Guru</span>
                    </a>
                </li>
                <li class="{{ str_contains(Request::fullUrl(), 'user?type=user') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/user') }}?type=user">
                        <i class="fas fa-users"></i>
                        <span>Murid</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('aranan') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/aranan') }}">
                        <i class="fas fa-signature"></i>
                        <span>Aranan</span>
                    </a>
                </li>
                <li class="{{ Request::is('Paribasan') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/paribasan') }}">
                        <i class="fas fa-signature"></i>
                        <span>Paribasan</span>
                    </a>
                </li>
                <li class="{{ Request::is('parikan') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/parikan') }}">
                        <i class="fas fa-signature"></i>
                        <span>Parikan</span>
                    </a>
                </li> --}}
            @endif
        </ul>

    </aside>
</div>
