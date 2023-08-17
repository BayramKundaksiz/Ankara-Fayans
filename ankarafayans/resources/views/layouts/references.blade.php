  <!-- /*
  * Template Name: Architect
  * Template Author: Untree.co
  * Tempalte URI: https://untree.co/
  * License: https://creativecommons.org/licenses/by/3.0/
  */ -->
  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords"
          content="Ankara fayans, seramik fayans, iç mekan fayans, dış mekan fayans, modern fayans, klasik fayans">
      <meta name="author" content="Ankara Fayans Sitesi">
      <meta name="description"
          content="Ankara'nın bütün ilçelerine fayans ustası, seramik, granit, mermer ve tamir hizmeti veriyoruz. Ankarada fayans ustası Şükrü Ateş." />
      <link rel="shortcut icon" href="images/siteicon.png">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link
          href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,600&display=swap"
          rel="stylesheet">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="fonts/feather/style.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/style.css">


      <title>Ankara Fayans</title>
  </head>

  <body>

      @include('theme.mobileheader')

      @include('theme.navbar')



      <div class="site-section overlay site-cover-2" style="background-image: url('images/img_v_3-min.jpg')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 mx-auto text-center">
                      <h1 class="text-white mb-0">Referanslar</h1>
                  </div>
              </div>
          </div>
      </div>


      <div class="container pb-5 mb-5 border-bottom">
          <div class="row">
              <div class="col-lg-12">
                  <br>
              </div>
              <div class="col-lg-12">
                  <div class="row gutter-1 gallery">
                      @foreach ($referanslar as $referans)
                          <div class="col-4">
                              <strong>
                                  <p style="color: rgb(59, 35, 178); text-align: center;">{{ $referans->referans_ismi }}
                                  </p>
                              </strong>
                              <a href="images/referans/{{ $referans->referans_gorseli }}" class="gal-item"
                                  data-fancybox="gal"><img style="height: 300px; width: 500px;"
                                      src="images/referans/{{ $referans->referans_gorseli }}" alt="Image"
                                      class="img-fluid">
                              </a>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>


      <div class="container pb-5 mb-5 border-bottom">
          <div style="text-align: center" class="row">
              <div class="col-lg-12">
                  <h1 style="text-align: center;" class="h6 mb-3 text-black">Müşteri Yorumları</h1>
              </div>
              <div style="margin-left: 21%" class="col-lg-7">
                  <div class="main-slider owl-single owl-carousel">
                      <div class="testimonial mx-auto">
                          <figure class="img-wrap">
                              <img src="images/person_2-min.jpg" alt="Image" class="img-fluid">
                          </figure>
                          <h3 class="name">Adam Aderson</h3>
                          <blockquote>
                              <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                  coast of the Semantics, a large language ocean.&rdquo;</p>
                          </blockquote>
                      </div>

                      <div class="testimonial mx-auto">
                          <figure class="img-wrap">
                              <img src="images/person_3-min.jpg" alt="Image" class="img-fluid">
                          </figure>
                          <h3 class="name">Lukas Devlin</h3>
                          <blockquote>
                              <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                  coast of the Semantics, a large language ocean.&rdquo;</p>
                          </blockquote>
                      </div>

                      <div class="testimonial mx-auto">
                          <figure class="img-wrap">
                              <img src="images/person_4-min.jpg" alt="Image" class="img-fluid">
                          </figure>
                          <h3 class="name">Kayla Bryant</h3>
                          <blockquote>
                              <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                  coast of the Semantics, a large language ocean.&rdquo;</p>
                          </blockquote>
                      </div>

                  </div>
              </div>
          </div>
      </div>


      <div class="site-section overlay site-cover-2" style="background-image: url('images/img_v_3-min.jpg')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 mx-auto text-center">
                      <h3 class="text-white mb-4">Sizde referanslarımızdan birisi olmak istiyorsanız</h2>
                          <p class="mb-0"><a style="background: rgb(32, 164, 47); border: none;"
                                  href="tel:05356662924" rel="noopener" class="btn btn-primary">Hemen
                                  Arayın</a></p>
                  </div>
              </div>
          </div>
      </div>


      @include('theme.footer')

      @include('theme.overlayer')

      @include('theme.script')


  </body>

  </html>
