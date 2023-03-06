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
                <li>
                    <a href="{{route('books.admin.index')}}" class="{{ ('active') }}">
                        <i class="fas fa-chart-bar"></i>Data Buku</a>
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