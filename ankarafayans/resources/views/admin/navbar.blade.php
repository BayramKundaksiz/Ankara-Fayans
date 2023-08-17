<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Anasayfa</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('yonet') ? 'active' : '' }}" href="{{ route('yonet') }}"
                aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Gelen Mesajlar</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">İşlemler</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('fayans-ekleme-sayfasi') ? 'active' : '' }}"
                href="{{ route('fayansekle') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Fayans Ekle</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('seramik-ekleme-sayfasi') ? 'active' : '' }}"
                href="{{ route('seramikekle') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Seramik Ekle</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('banyo-ekleme-sayfasi') ? 'active' : '' }}"
                href="{{ route('banyoekle') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Banyo Ekle</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('dus-ekleme-sayfasi') ? 'active' : '' }}"
                href="{{ route('tuvaletekle') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Tuvalet Ekle</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('referans-ekleme-sayfasi') ? 'active' : '' }}"
                href="{{ route('referansekle') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Referans Ekle</span>
            </a>
        </li>
    </ul>
</nav>
