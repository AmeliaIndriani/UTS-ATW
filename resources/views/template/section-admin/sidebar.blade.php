<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
        <img src="{{url('public')}}/assetsadmin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{url('beranda')}}">
                        <i class="fas fa-home"></i>Beranda</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">   
                    </ul>
                </li>
                <li>
                    <a href="{{url('post')}}">
                        <i class="fas fa-clipboard-list"></i>Artikel</a>
                </li>
                <li>
                    <a href="{{url('komentar')}}">
                        <i class="fas fa-comments"></i>Komentar</a>
                </li>
                <li>
                    <a href="{{url('user')}}">
                        <i class="fas fa-user"></i>User</a>
                </li>
               
            </ul>
        </nav>
    </div>
</aside>