<nav class="site-nav">
    <div class="container">

        <div class="row align-items-center">

            <div class="logo">
                <a href="{{ route('anasayfa') }}" style="color: grey" class="">Şükrü Ateş ✔️<span style="color: grey">
                        Ankara
                        Fayans</span><span class="text-black"></span></a>
            </div>
            <div class="col-12 col-sm-12 col-lg-12 site-navigation text-left">
                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('anasayfa') }}">Anasayfa</a>
                    </li>
                    <li class="{{ request()->is('yaptigim-isler') ? 'active' : '' }}"><a
                            href="{{ route('yaptigimisler') }}">Yaptığım
                            İşler</a></li>
                    <li class="{{ request()->is('hakkimda') ? 'active' : '' }}"><a
                            href="{{ route('hakkimda') }}">Hakkımda</a></li>
                    <li class="{{ request()->is('referanslar') ? 'active' : '' }}"><a
                            href="{{ route('referanslar') }}">Referanslar</a></li>
                    <li class="{{ request()->is('iletisim') ? 'active' : '' }}"><a
                            href="{{ route('iletisim') }}">İletişim</a></li>
                </ul>

                <a href="#" class="burger  ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none dark"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>

        </div>
    </div> <!-- END container -->

</nav> <!-- END nav -->
