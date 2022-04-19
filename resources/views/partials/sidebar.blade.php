<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/home">
            <img src="{{asset('admin/images/icon/my-logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow {{ ('active') }}" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="/home">Dashboard</a>
                            </li>
                            <li>
                                <a href="/about">Dash 2</a>
                            </li>
                            <li>
                                <a href="/porto">Dash 3</a>
                            </li>
                            <li>
                                <a href="/contacts">Dash 4</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="{{route('contacts.index')}}" class="{{ ('active') }}">
                        <i class="fas fa-chart-bar"></i>Data Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->