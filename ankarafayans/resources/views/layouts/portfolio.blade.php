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

    @include('theme.style')

    <title>Ankara Fayans</title>

</head>

<body>

    @include('theme.mobileheader')

    @include('theme.navbar')

    @include('layouts.portfolioslider')

    @include('layouts.portfolioprojects')

    @include('layouts.testimonials')

    @include('theme.footer')

    @include('theme.overlayer')

    @include('theme.script')


</body>

</html>
