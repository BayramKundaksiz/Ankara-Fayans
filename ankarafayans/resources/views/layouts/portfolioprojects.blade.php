<div class="site-section" id="portfolio-section">
    <div class="container">

        <div class="filters" data-aos="fade-up" data-aos-delay="100">
            <ul>
                <li class="active" data-filter="*">Hepsi</li>
                <li data-filter=".packaging">Fayans</li>
                <li data-filter=".mockup">Seramik</li>
                <li data-filter=".typography">Banyo</li>
                <li data-filter=".photography">Tuvalet</li>
            </ul>
        </div>

        <div class="filters-content mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row grid">

                @foreach ($seramikgetir as $seramik)
                    <div class="isotope-card col-sm-4 all mockup">
                        <a href="images/seramik/{{ $seramik->seramik_gorseli }}" data-fancybox="gal">
                            <img style="height: 350px; width: 676px;"
                                src="images/seramik/{{ $seramik->seramik_gorseli }}" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $seramik->seramik_baslik }}</h3>
                                <div class="cat">{{ $seramik->aciklama }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

                @foreach ($banyogetir as $banyo)
                    <div class="isotope-card col-sm-4 all typography">
                        <a href="images/banyo/{{ $banyo->banyo_gorseli }}" data-fancybox="gal">
                            <img style="height: 350px; width: 676px;" src="images/banyo/{{ $banyo->banyo_gorseli }}"
                                alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $banyo->banyo_baslik }}</h3>
                                <div class="cat">{{ $banyo->banyo_aciklama }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

                @foreach ($fayansgetir as $fayans)
                    <div class="isotope-card col-sm-4 all packaging">
                        <a href="images/fayans/{{ $fayans->fayans_gorseli }}" data-fancybox="gal">
                            <img style="height: 350px; width: 676px;" src="images/fayans/{{ $fayans->fayans_gorseli }}"
                                alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $fayans->fayans_baslik }}</h3>
                                <div class="cat">{{ $fayans->fayans_aciklama }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

                @foreach ($tuvaletgetir as $tuvalet)
                    <div class="isotope-card col-sm-4 all photography">
                        <a href="images/tuvalet/{{ $tuvalet->tuvalet_gorseli }}" data-fancybox="gal">
                            <img style="height: 350px; width: 676px;"
                                src="images/tuvalet/{{ $tuvalet->tuvalet_gorseli }}" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>{{ $tuvalet->tuvalet_baslik }}</h3>
                                <div class="cat">{{ $tuvalet->tuvalet_aciklama }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
