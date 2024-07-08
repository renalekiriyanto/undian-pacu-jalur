<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('daerah.list') }}" class="nav-link {{ Request::is('daerah*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-location-arrow"></i>
                <p>
                    Daerah
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('arena.list') }}" class="nav-link {{ Request::is('arena*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    Arena
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-ship"></i>
                <p>
                    Jalur
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Undian
                </p>
            </a>
        </li>
    </ul>
</nav>
